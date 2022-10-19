<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Jenis;

class JenisController extends Controller
{
    public function index(){
        $jenis = DB::table('tbl_jenis')->get();
        return view('jenis.index', compact('jenis'));
    }
    public function create(){
        return view('jenis.create');
    }
    public function store(request $request){
        $simpan = Jenis::create([
            'jenis_nama'=> $request ->jenis_nama,
            'jenis_status'=> $request ->jenis_status
        ]);
        echo $simpan->id_jenis;
        return redirect('/jenis');
    }
    public function edit($id){
        $jenis = Jenis::find($id);
        return view('jenis.edit',compact(['jenis']));
    }
    public function update($id,request $request){
        $jenis = Jenis::find($id)
        ->update($request->except('_token','_method'));
        return redirect('/jenis');
    }
    public function destroy($id){
        $hapus = Jenis::find($id)->delete();
        return redirect('/jenis');
    }
}
