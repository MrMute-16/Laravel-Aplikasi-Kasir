<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Transaksi;
use App\Models\Transaksi_detail;

class TransaksiController extends Controller
{
    public function index(){
        $transaksi = DB::table('tbl_transaksi')
        ->get();
        return view('transaksi.index', compact('transaksi'));
    }
    public function create(){
        return view('transaksi.create');
    }
    public function store(request $request){
        $simpan = Transaksi::create([
            'id_admin'=> $request ->id_admin,
            'transaksi_tanggal'=> $request ->transaksi_tanggal,
            'transaksi_nonota' => $request ->transaksi_nonota,
            'transaksi_status'=> $request ->transaksi_status,
        ]);
        echo $simpan->id_transaksi;

        $sim = Transaksi_detail::create([
            'id_transaksi'=> $simpan->id_transaksi,
            'id_barang'=> $request ->id_barang,
            'transaksi_jenis' => $request ->transaksi_jenis,
            'transaksi_harga'=> $request ->transaksi_harga,
            'transaksi_jumlah'=> $request ->transaksi_jumlah,
            'transaksi_detail_status'=> $request ->transaksi_detail_status,
        ]);
        echo $sim->id_transaksi_detail;
        return redirect('/transaksi');
    }
    public function edit($id){
        $transaksi = Transaksi::find($id);
        return view('transaksi.edit',compact(['transaksi']));
    }
    public function update($id,request $request){
        $transaksi = Transaksi::find($id)
        ->update($request->except('_token','_method'));
        return redirect('/transaksi');
    }
    public function destroy($id){
        $hapus = Transaksi::find($id)->delete();
        return redirect('/transaksi');
    }
}
