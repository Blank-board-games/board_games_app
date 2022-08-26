<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogueController extends Controller
{

    //public $sorting;
    //public $pagesize;

    public function amount()
    {
        $this->sorting = "default";
    }



    public function index()
    {

        $product = Product::all();
        $categories =  Category::all();

        //$categories = Category::all();

        $product = DB::table('products')
            ->orderBy('price', 'desc')
            ->get();

        // $product = Product::find(1)->title()->first();

        //$product = Product::paginate(8);

        return view('collection/collectionfull')
            ->with('categories', $categories)
            ->with('products', $product);
    }



    public function homepage()
    {
        $products = Product::limit(8)->offset(0)
            ->orderBy('updated_at', 'DESC')
            ->where('new_price', '<>', 'NULL')
            ->where('count_in_stock', '<>', 0)
            ->get();
        $count = 8 - $products->count(); //count, to get 8 products


        if ($count != 0) {
            $addition_products = Product::limit($count)->offset(0)->orderBy('updated_at', 'DESC')->where('new_price', '=', NULL)->get();
            $products = $products->merge($addition_products);
        }

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
}
