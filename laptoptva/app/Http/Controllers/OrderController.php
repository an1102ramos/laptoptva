<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_detail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::paginate(5);
        return view('admin.order.ListOrder', compact('orders'));
    }

    public function detail(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $products = $order->product;
        $order_detail_products = Order_detail::where('order_id', $id)->get();
        return view('admin.order.DetailOrder',  compact('order', 'products',  'order_detail_products'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->order_status = $request->order_status;
        $order->save();
        return redirect()->route('order.index');
    }

    public function destroy($id)
    {
        $orders = Order::where('customer_id', $id)->get();
        foreach ($orders as $order)
        {
            Order_detail::where('order_id', $order->order_id)->delete();
        }
        Order::where('customer_id', $id)->delete();
        return redirect()->route('order.index');
    }

    public function search(Request $request)
    {

        $keyword = $request->input('keyword');
        if (!$keyword)
        {
            return redirect()->route('order.index');
        }
        $orders = Order::where('order_id', 'LIKE', '%' .$keyword. '%')->orderBy('created_at','desc')->paginate(5);
        return view('admin.order.ListOrder', compact('orders'));

    }

    public function filterByOrderStatus(Request $request)
    {

        $order_status = $request->input('order_status');
        $orders = Order::where('order_status', $order_status)->paginate(5);
        $totalOrderFilter = count($orders);
        return view('admin.order.ListOrder', compact('totalOrderFilter', 'orders', 'order_status' ));
    }
}
