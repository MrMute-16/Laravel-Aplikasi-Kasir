<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Transaksi_detail;

class TransaksiDetailController extends Controller
{
    public function index($id){
        $detail = DB::table('tbl_transaksi_detail')
        ->where('id_transaksi',$id)
        ->get();

        return view('transaksi.detail',compact(['detail']));
    }
}
