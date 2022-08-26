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

    public function stock($stockSituation)
    {
        $stock = ($stockSituation == 0) ? 'in' : 'out';

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

    public function categories($title)
    {
        $title = ($title == 0) ? 'strategy' : 'noin';

        $categorie = DB::table('categories')
            ->where('title', '=', 'strategy_games')
            ->get();

        return response()->json($categorie, 200);
    }
}
