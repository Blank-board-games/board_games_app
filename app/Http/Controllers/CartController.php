<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
  public function index()
  {
    $products = Product::limit(8)->offset(0)
      ->orderBy('updated_at', 'DESC')
      ->where('count_in_stock', '<>', 0)
      ->get();
    return view('cart')->with('products', $products);
  }

  public function addToCart(Request $request)
  {
    return 'ōk';
  }
}
