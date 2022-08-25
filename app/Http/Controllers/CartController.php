<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $request->validate([
            'id' => 'required',
            'quantity' => 'required|min:1',
        ]);
        $id = $request->input('id');
        $quantity = $request->input('quantity');
        $product = Product::find($id);
        if (!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            $cart[$id]['quantity']+=$quantity;
        } else {
            $cart[$id] = [
                "title" => $product->title,
                "quantity" => $quantity,
                "price" => $product->price,
                "images" => $product->image_path,
                "count_in_stock" => $product->count_in_stock,
            ];
        }
        session()->put('cart', $cart);

        Session::flash('message', "Item added to your cart!");
        return redirect()->back();
    }
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            return response()->json(['data' => 'success']);
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            return redirect()->back();
        }
    }
}
