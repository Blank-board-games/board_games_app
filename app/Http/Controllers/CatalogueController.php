<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function homepage()
    {
        $products = Product::limit(8)->offset(0)->orderBy('updated_at', 'DESC')->where('new_price', '<>', 'NULL')->get();
        $count = 8 - $products->count(); //count, to get 8 products

        if($count!=0){ 
            $addition_products = Product::limit($count)->offset(0)->orderBy('updated_at', 'DESC')->where('new_price', '=', NULL)->get();
            $products = $products->merge($addition_products);
        }
        return view('homepage')
        ->with('products', $products);
    }
}
