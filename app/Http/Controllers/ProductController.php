<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return response()->json([
            "status" => true
        ], 200);
    }

    public function get()
    {
        return response()->json([], 200);
    }

    public function add()
    {
      $groupByEntry = function(&$arr) {
        $firstValue = current($arr);
        if(is_array($firstValue)) {
          $entry = [];
          $count = count($firstValue);
          foreach ($arr as $key => $column_values) {
            for($i = 0; $i<$count; $i++) {
              $entry[$i][$key] = $column_values[$i];
            }
          }

          $arr = $entry;
        } else {
          $arr = [$arr];
        }
      };

      $prod_title = $_POST['title'];
      $prod_descr = $_POST['description'];
      $prod_count = $_POST['count'];
      $prod_price = $_POST['price'];
      $prod_age = "+" . $_POST['age'];
      $prod_category = $_POST['category'];
      // $prod_image_path = 

      // Storage::disk('public')->makeDirectory('img');
      $target_dir = __DIR__ . '/uploads';
      $images = $_FILES['images'];
      $groupByEntry($images);
      $count = 0;

      foreach($images as $image) {
        $target_file = $target_dir . basename($image['name']);
        $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // if($image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "jpeg") 
        //   return "Only jpg, jpeg, png file types allowed";
        // if($image['size'] > 500000) return "File is too large";
        
        $size = getimagesize($image["tmp_name"]);
        if($size) {
          $count++;
          Storage::disk('public')->put($image["name"], file_get_contents($image['tmp_name']));
        }
      }

      $products = Product::create([
        'title' => $prod_title,
        'description' => $prod_descr,
        'count_in_stock' => $prod_count,
        'price' => $prod_price,
        'age_recom' => $prod_age,
        'category_id' => $prod_category
      ]);

      $output = [
        "status" => true,
        "data" => $_POST,  //atgriež failu nosaukumus
        "files" => $images,  //atgriež failus
        "title" => $prod_title
      ];

      return response()->json($output, 200);
    }
}