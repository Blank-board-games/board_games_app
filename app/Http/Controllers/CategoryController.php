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
    return view('dashboard')->with('categories', $categories);
  }

  public function delete($id) {
    $category = Category::where('id', $id)->first();
    $category->delete();

    $status = 'Category added succesfully';
    return redirect('/dashboard')->with('status', $status);

  }

  public function add()
  {
    $status = 'Something went wrong';
    $cat_title = $_POST['title'];

    $category = Category::create([
      'title' => $cat_title
    ]);

    if($category) $status = 'Category added succesfully';

    return redirect('/dashboard')->with('status', $status);

  }
}
