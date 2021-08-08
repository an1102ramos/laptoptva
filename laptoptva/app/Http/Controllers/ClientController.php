<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Config;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    public function home()
    {
        $mostViewProducts = Product::orderByDesc('prd_view_count')->limit('19')->get();
        $onSaleProducts = Product::where('prd_on_sale', 1)->limit('16')->get();
        $categories = Category::all();
        $macbooks = Product::where('cat_id', 15)->orderByDesc('prd_view_count')->limit(3)->get();
        $gamings = Product::where('cat_id', 1)->orderByDesc('prd_view_count')->limit(20)->get();
        $offices = Product::where('cat_id', 2)->orderByDesc('prd_view_count')->limit(20)->get();
        $macbooks_popular = Product::where('cat_id',15)->orderByDesc('prd_view_count')->limit(20)->get();
        $prdBestPrice = Product::orderByDesc('prd_retail_price')->first();
        $mostSeller = Product::orderByDesc('prd_sell_quantity')->limit(12)->get();
        $contact = Config::orderByDesc('config_id')->first();
        $mostNewProducts = Product::orderByDesc('created_at')->limit(6)->get();

        return view('client.layouts.home',
            compact('mostViewProducts', 'mostSeller',
                'prdBestPrice', 'macbooks_popular', 'offices', 'gamings',
                'onSaleProducts',  'categories', 'macbooks', 'contact', 'mostNewProducts'));
    }

    public function index()
    {
        $contact = Config::orderByDesc('config_id')->first();
        $categories = Category::all();
        return view('client.index', compact('contact', 'categories'));
    }

    public function category($cat_id)
    {
        $products = Product::where('cat_id',  $cat_id)->paginate(20);
        $categories = Category::all();
        $findCategoryById = Category::findOrFail($cat_id);
        $contact = Config::orderByDesc('config_id')->first();
        return  view('client.category.showproduct', compact('findCategoryById', 'contact', 'categories', 'products'));
    }
    public function product($prd_id)
    {

        $productKey = 'product_' . $prd_id;
        //dd(Session::has($prd_id));
        if (Session::has($productKey) == false)
        {
            Product::where('prd_id', $prd_id)->increment('prd_view_count');
            Session::put($productKey, 1);

        }
        $categories = Category::all();
        $contact = Config::orderByDesc('config_id')->first();
        $product = Product::findOrFail($prd_id);
        return view('client.product.product', compact('product', 'contact',  'categories'));
    }

    public function search(Request $request)
    {
        $contact = Config::orderByDesc('config_id')->first();
        $keyword = $request->input('keyword');
        if (!$keyword)
        {
            return redirect()->route('client.home');
        }
        $products = Product::where('prd_name', 'LIKE', '%' .$keyword. '%')->orderBy('created_at','desc')->paginate(5);
        $categories = Category::all();

        return view('client.product.resultsearch', compact('products', 'categories',  'contact'));

    }

    public function contact()
    {
        $categories = Category::all();
        $contact = Config::orderByDesc('config_id')->first();
        return  view('client.contact.contact', compact('contact',   'categories'));
    }
}
