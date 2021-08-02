<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCategoryRequest;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(5);
        //dd($categories->supplier);
        return view('admin.category.ListCategory', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view('admin.category.CreateCategory', compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddCategoryRequest $request)
    {
        $category = new Category();
        $category->cat_name = $request->cat_name;
        $category->sub_id = $request->sup_id;
        $category->save();
        Session::flash('success', 'Thêm mới danh mục thành công');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $suppliers = Supplier::all();
        return view('admin.category.EditCategory', compact('category' , 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AddCategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->cat_name = $request->cat_name;
        $category->sub_id = $request->sup_id;
        $category->save();
        Session::flash('success', 'Cập nhật danh mục thành công');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        Session::flash('success', 'Xóa danh mục thành công');
        return redirect()->route('category.index');
    }
}
