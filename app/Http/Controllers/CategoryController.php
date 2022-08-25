<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use App\Models\Product;

class CategoryController extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function index()
  {
    $categories =  Category::all();
    $products =  Product::all();
    return view('dashboard')
    ->with('categories', $categories)
    ->with('products', $products);
  }

  public function delete($id) {
    $category = Category::where('id', $id)->first();
    $category->delete();

    Session::flash('message_cat_del', "Category deleted succesfully!");
    return redirect()->back();

  }

  public function add()
  {
    $status = 'Something went wrong';
    $cat_title = $_POST['title'];

    $category = Category::create([
      'title' => $cat_title
    ]);

    Session::flash('message_cat_add', "Category added succesfully!");
    return redirect()->back();
  }
}
