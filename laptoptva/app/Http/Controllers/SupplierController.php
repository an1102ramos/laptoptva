<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(Supplier::count());
        //$page = $request->page;
            $suppliers = Supplier::paginate(5);
            return view('admin.supplier.ListSupplier', compact('suppliers'));
            //return  response()->json($suppliers);
    }
    public function fetch_data(Request $request)
    {
        if($request->ajax()) {
            $data = Supplier::paginate(5);
            return view('admin.supplier.list', compact('data'))->render();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.supplier.CreateSupplier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($sup_id)
    {
        $supplier = DB::table('suppliers')->where('sup_id',"$sup_id")->first();
        return view('admin.supplier.EditSupplier', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sup_id)
    {
        $supplier = Supplier::findOrFail($sup_id);
        $supplier->sub_name = $request->name;
        $supplier->sub_address = $request->address;
        $supplier->sub_phone = $request->phone;
        $supplier->save();
        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($sup_id)
    {
        $supplier = Supplier::findOrFail($sup_id);
        $supplier->delete();
        return redirect()->route('supplier.index');
    }
}
