<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ApiController extends Controller
{

    public function index($priceorder)
    {
        // $product = Product::all();
        // $categories =  Category::all();

        $priceorder = ($priceorder == 'desc') ? 'desc' : 'asc';

        $product = DB::table('products')
            ->orderBy('price', $priceorder)
            ->get();


        //$product = Product::paginate(8);

        return response()->json($product, 200);
    }
    public function default()
    {
        $product = DB::table('products')
            ->orderBy('updated_at')
            ->get();
        return response()->json($product, 200);
    }

    public function stock($stockSituation)
    {
        $stock = ($stockSituation == 'in') ? true : false;

        if ($stock) {
            $product = DB::table('products')
                ->where('count_in_stock', '>', 0)
                ->get();
        } else {
            $product = DB::table('products')
                ->where('count_in_stock', '=', 0)
                ->get();
        }
        return response()->json($product, 200);
    }

    public function categories($id)
    {

        $products = DB::table('categories')
            ->join('products', 'products.category_id', '=', 'categories.id')
            ->select('products.*')
            ->where('categories.id', '=', $id)
            ->get();
            return $products;

        return response()->json($products, 200);
    }
}
