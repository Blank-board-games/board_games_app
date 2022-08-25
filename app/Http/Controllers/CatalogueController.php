<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function homepage()
    {
        $products = Product::limit(8)->offset(0)
            ->orderBy('updated_at', 'DESC')
            ->where('new_price', '<>', 'NULL')
            ->where('count_in_stock', '<>', 0)
            ->get();
        $count = 8 - $products->count(); //count, to get 8 products

        if ($count != 0) {
            $addition_products = Product::limit($count)->offset(0)
                ->orderBy('updated_at', 'DESC')
                ->where('new_price', '=', NULL)
                ->where('count_in_stock', '<>', 0)
                ->get();
            if ($count != 4) {
                $products = $products->merge($addition_products);
            } else {
                $products = $addition_products;
            }
        }
        return view('homepage')
            ->with('products', $products);
    }

    public function showProduct($id)
    {
        $product = Product::where('id', '=', $id)->first();
        if ($product == NULL) {
            abort(404);
        }
        $similar_products = Product::where('category_id', '=', $product->category_id)
            ->where('id', '<>', $id)
            ->orderBy('updated_at', 'DESC')
            ->limit(4)->offset(0)
            ->get();
        $count = 4 - $similar_products->count(); //count, to get 4 products
        if ($count != 0) {
            $addition_products = Product::limit($count)->offset(0)
                ->where('category_id', '<>', $product->category_id)
                ->where('id', '<>', $id)
                ->where('count_in_stock', '<>', 0)
                ->orderBy('updated_at', 'DESC')->get();
            if ($count != 4) {
                $similar_products = $similar_products->merge($addition_products);
            } else {
                $similar_products = $addition_products;
            }
        }

        return view('product')
            ->with('product', $product)
            ->with('products', $similar_products);
    }

    public function showSearch(Request $request){
        if($request->input('search')){
            $phrase = $request->input('search');
            $products =  Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*')
            ->where('products.title', 'LIKE', '%' . $phrase . '%')
            ->orWhere('categories.title', 'LIKE', '%' . $phrase . '%')
            ->get();
            return view('search')->with('products', $products);
        }
        return view('search');
    }
}
