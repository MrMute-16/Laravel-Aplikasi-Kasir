<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index(){
        $supplier = DB::table('tbl_supplier')->get();
        return view('supplier.index', compact('supplier'));
    }
    public function create(){
        return view('supplier.create');
    }
    public function store(request $request){
        $simpan = supplier::create([
            'supplier_nama'=> $request ->supplier_nama,
            'supplier_alamat'=> $request ->supplier_alamat,
            'supplier_phone' => $request ->supplier_phone,
            'supplier_status'=>$request->supplier_status
        ]);
        echo $simpan->id_supplier;
        return redirect('/supplier');
    }
    public function edit($id){
        $supplier = supplier::find($id);
        return view('supplier.edit',compact(['supplier']));
    }
    public function update($id,request $request){
        $supplier = supplier::find($id)
        ->update($request->except('_token','_method'));
        return redirect('/supplier');
    }
    public function destroy($id){
        $hapus = supplier::find($id)->delete();
        return redirect('/supplier');
    }
}
