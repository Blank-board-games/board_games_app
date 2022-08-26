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
}
