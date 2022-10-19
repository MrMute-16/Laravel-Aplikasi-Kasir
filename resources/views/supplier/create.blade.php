@extends('layout.conten')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Supplier</h3>
              </div>
              <form action="/supplier/store" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Supplier Nama</label>
                    <input type="text" name="supplier_nama" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Supplier Alamat</label>
                    <input type="text" name="supplier_alamat" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Supplier Phone</label>
                    <input type="text" name="supplier_phone" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Supplier Status</label>
                    <input type="text" name="supplier_status" class="form-control" id="" >
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            @endsection