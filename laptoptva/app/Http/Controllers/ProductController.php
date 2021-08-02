<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\New_;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(5);
        $categories = Category::all();
        return view('admin.product.ListProduct', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.CreateProduct',  compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {

        //Khởi tạo mới đối tượng product, gán các trường tương ứng với request gửi lên từ trình duyệt
        $product = new Product();
        $product->prd_name = $request->prd_name;
        $product->cat_id = $request->cat_id;
        $product->prd_cpu = $request->prd_cpu;
        $product->prd_ram = $request->prd_ram;
        $product->prd_hard_drive = $request->prd_hard_drive;
        $product->prd_screen = $request->prd_screen;
        $product->prd_vga = $request->prd_vga;
        $product->prd_service_tag = $request->prd_service_tag;
        $product->prd_instock = $request->prd_instock;
        $product->prd_sell_quantity = $request->prd_sell_quantity;
        $product->prd_price = $request->prd_price;
        $product->prd_retail_price = $request->prd_retail_price;
        $product->prd_status = $request->prd_status;
        $product->prd_description = $request->prd_description;
        $product->prd_view_count = 0;

        $file = $request->inputFile;
        //dd($file);
        // Nếu file không tồn tại thì trường image gán bằng NULL
        if (!$request->hasFile('inputFile')) {
            $product->prd_image = $file;
        } else {
            //Lấy ra định dạng và tên mới của file từ request
            $fileName = $file->getClientOriginalName();
            //$fileExtension = $file->getClientOriginalExtension();
            // Gán tên mới cho file trước khi lưu lên server
            $newFileName = date('d-m-Y-H-i')."_$fileName";

            //Lưu file vào thư mục storage/app/public/image với tên mới
            $request->file('inputFile')->storeAs('public/images', $newFileName);

            // Gán trường image của đối tượng product với tên mới
            $product->prd_image = $newFileName;
        }
        $product->save();

        $message = "Thêm  mới sản phẩm thành công!";
        Session::flash('create-success', $message);
        return redirect()->route('product.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.ShowProduct', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('admin.product.EditProduct',  compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        //dd($request->all());
        $product = Product::findOrFail($id);
        $product->prd_name = $request->prd_name;
        $product->cat_id = $request->cat_id;
        $product->prd_cpu = $request->prd_cpu;
        $product->prd_ram = $request->prd_ram;
        $product->prd_hard_drive = $request->prd_hard_drive;
        $product->prd_screen = $request->prd_screen;
        $product->prd_vga = $request->prd_vga;
        $product->prd_service_tag = $request->prd_service_tag;
        $product->prd_instock = $request->prd_instock;
        $product->prd_sell_quantity = $request->prd_sell_quantity;
        $product->prd_price = $request->prd_price;
        $product->prd_retail_price = $request->prd_retail_price;
        $product->prd_status = $request->prd_status;
        $product->prd_description = $request->prd_description;

        $file = $request->inputFile;
        //dd($file);
        // Nếu file không tồn tại thì trường image gán bằng NULL
        if (!$request->hasFile('inputFile')) {
            $product->prd_image = $file;
        } else {
            //Lấy ra định dạng và tên mới của file từ request
            $fileName = $file->getClientOriginalName();
            //$fileExtension = $file->getClientOriginalExtension();
            // Gán tên mới cho file trước khi lưu lên server
            $newFileName = date('d-m-Y-H-i') . "_$fileName";

            //Lưu file vào thư mục storage/app/public/image với tên mới
            $request->file('inputFile')->storeAs('public/images', $newFileName);

            // Gán trường image của đối tượng product với tên mới
            $product->prd_image = $newFileName;
        }
        $product->save();

        $message = 'Cập nhật sản phẩm thành công!';
        Session::flash('create-success', $message);
        return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        $message = 'Xóa sản phẩm thành công!';
        Session::flash('create-success', $message);
        return redirect()->route('product.index');

    }

    public function filterByCategory(Request $request)
    {

        $idCategory = $request->input('cat_id');
        $categoryFilter = Category::findOrFail($idCategory);
        $products = Product::where('cat_id', $categoryFilter->cat_id)->paginate(5);
        $totalBlogFilter = count($products);
        $categories = Category::all();
        return view('admin.product.ListProduct', compact('categories', 'totalBlogFilter', 'products' ,'categoryFilter'));
    }
}
