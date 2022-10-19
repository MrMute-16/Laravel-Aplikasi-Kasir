@extends('layout.conten')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Transaksi</h3>
              </div>
              <form action="/transaksi/store" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">id Admin</label>
                    <input type="text" name="id_admin" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Transaksi Tanggal</label>
                    <input type="date" name="transaksi_tanggal" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Transaksi Nota</label>
                    <input type="text" name="transaksi_nonota" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Transaksi Status</label>
                    <input type="text" name="transaksi_status" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Id Barang</label>
                    <input type="text" name="id_barang" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Transaksi Jenis</label>
                    <input type="text" name="transaksi_jenis" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Transaksi Harga</label>
                    <input type="text" name="transaksi_harga" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Transaksi Jumlah</label>
                    <input type="text" name="transaksi_jumlah" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Transaksi Detail Status</label>
                    <input type="text" name="transaksi_detail_status" class="form-control" id="" >
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            @endsection