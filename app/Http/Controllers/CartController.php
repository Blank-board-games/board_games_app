<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function checkoutIndex()
    {
        $cart = session()->get('cart');
        $total = 0.00; 
        if($cart){ 
            foreach ($cart as $key => $value) {
                $total += $value['price']*$value['quantity'];
            }
        }
        else{ 
            Session::flash('error', "Your cart is empty!");
        }
        return view('checkout')->with('total', $total);
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

    public function checkout(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);
        $cart = session()->get('cart');
        if(!$cart){ 
            Session::flash('message', "Failed: there is nothing in your cart! :( ");
            return redirect()->back();
        }
        $order = Order::create([
            'email' => $request->input('email'),
        ]);

        foreach ($cart as $key => $value) {
            $item = DB::table('order_product')->insert([
                'order_id' => $order->id, 
                'product_id' => $key,
                'product_price' => $value['price'], 
                'quantity' => $value['quantity']
            ]);
            if(!isset($item)){ 
                Session::flash('message', "Failed! :( ");
                return redirect()->back();
            }
        }
        $request->session()->forget('cart');
        Session::flash('message', "Success! :) ");
        return redirect()->back();
    }
}
