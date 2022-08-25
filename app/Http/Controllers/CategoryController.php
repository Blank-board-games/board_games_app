<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function index()
  {
    $categories =  Category::all();
    $products =  Product::all();
    $query =  DB::table('orders')
    ->leftjoin('order_product', 'orders.id', '=', 'order_id')
    ->join('products', 'product_id', '=', 'products.id')
    ->select('orders.id', 'products.title', 'order_product.quantity' , 'order_product.product_price')
    ->orderBy('orders.id')
    ->get();
    $orderIds = DB::table('orders')
    ->select('id', 'email')->distinct()->get();

    return view('dashboard')
    ->with('categories', $categories)
    ->with('products', $products)
    ->with('orderIds', $orderIds)
    ->with('orders', $query);
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
