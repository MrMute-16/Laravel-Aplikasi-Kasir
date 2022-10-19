@extends('layout.conten')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Admin</h3>
              </div>
              <form action="/barang/update/{{$barang->id}}" method="post">
                @csrf
                @method('put')
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Id Barang</label>
                    <input type="text" value="{{$barang->id_barang}}" name="id_barang" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Barang Kode</label>
                    <input type="text" value="{{$barang->barang_kode}}" name="barang_kode" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Barang Nama</label>
                    <input type="text" value="{{$barang->barang_nama}}" name="barang_nama" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Id Jenis</label>
                    <input type="number" value="{{$barang->id_jenis}}" name="id_jenis" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Id Supplier</label>
                    <input type="number" value="{{$barang->id_supplier}}" name="id_supplier" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Harga Jual</label>
                    <input type="text" value="{{$barang->harga_jual}}" name="harga_jual" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="">Barang Status</label>
                    <input type="text" value="{{$barang->barang_status}}" name="barang_status" class="form-control" id="exampleInputPassword1">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            @endsection