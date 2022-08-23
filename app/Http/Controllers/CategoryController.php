<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Product;

class CategoryController extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function index()
  {
    $categories =  Category::all();
    return view('welcome')->with('categories', $categories);
  }

  public function add()
  {
    $status = 'Something went wrong';
    $cat_title = $_POST['title'];

    $category = Category::create([
      'title' => $cat_title
    ]);

    if($category) $status = 'Category added succesfully';

    return redirect('/test')->with('status', $status);

  }
}
