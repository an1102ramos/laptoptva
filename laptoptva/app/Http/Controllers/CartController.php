<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Category;
use App\Models\Config;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cart(Request $request)
    {

        $categories = Category::all();
        if ($request->id) {
            $this->storeCart($request);
        }
        $cart = session()->get('cart');
        $prd_id_list = [];
        $total = 0;
        if (isset($cart)) {
            foreach ($cart as $prd_id => $quantity) {
                $prd_id_list[] = $prd_id;
            }
            $products = Product::whereIn('prd_id', $prd_id_list)->get();
            foreach ($products as $product) {
                $total += $product->prd_price_discount * $cart[$product->prd_id];
            }
        }
        else
        {
            $products = null;
        }
        session()->put('total', $total);
        $contact = Config::orderByDesc('config_id')->first();
        return view('client.cart.cart', compact('categories', 'cart', 'products', 'total', 'contact'));
    }

    public function storeCart(Request $request)
    {

        $prd_id = $request->id;
        $categories = Category::all();
        if(session()->has("cart.$prd_id")){
            $quantity = session()->get("cart.$prd_id");
            session()->put("cart.$prd_id", $quantity++);
        }else{
            session()->put("cart.$prd_id", 1);
        }
    }
    public function updateCart(Request $request)
    {
        session()->put('cart', $request->get('quantity'));
        //dd($request->all());
        return redirect()->route('cart');

    }


    public function delete(Request $request)
    {
        $prd_id = $request->id;
        if(session()->has("cart.$prd_id")){
            session()->pull("cart.$prd_id");
        }
        return redirect()->route('cart');
    }

    public function order(CustomerRequest $request)
    {
        $contact = Config::orderByDesc('config_id')->first();
        $categories = Category::all();
        $customer = Customer::where('customer_phone', $request->phone)->first();
        if($customer == null){
            $customer = new Customer;
            $customer->customer_name = $request->customer_name;
            $customer->customer_phone = $request->customer_phone;
            $customer->address = $request->address;
            $customer->save();
            $customer_id = Customer::orderBy('customer_id', 'desc')->get()->first()->customer_id;
        }else{
            $customer_id = $customer->customer_id;
        }
        $order = new Order;
        $order->customer_id = $customer_id;
        $order->order_total = session()->get('total');
        $order->order_status = 0;
        $order->save();
        $newOrder = Order::orderBy('order_id', 'desc')->get()->first();
        $cart = session()->get('cart');
        foreach($cart as $prd_id => $quantity){
            $orderDetail = new Order_detail();
            $orderDetail->order_id = $newOrder->order_id;;
            $orderDetail->prd_id = $prd_id;
            $orderDetail->quantity = $quantity;
            $orderDetail->save();
        }
        session()->forget('cart');
        return view('client.cart.success', compact('categories', 'contact'));
    }
}
