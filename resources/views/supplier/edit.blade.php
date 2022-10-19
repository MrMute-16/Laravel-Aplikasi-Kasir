@extends('layout.conten')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Admin</h3>
              </div>
              <form action="/supplier/update/{{$supplier->id}}" method="post">
                @csrf
                @method('put')
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Id Supplier</label>
                    <input type="text" value="{{$supplier->id_supplier}}" name="id_supplier" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Supplier Nama</label>
                    <input type="text" value="{{$supplier->supplier_nama}}" name="supplier_nama" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Supplier Alamat</label>
                    <input type="text" value="{{$supplier->supplier_alamat}}" name="supplier_alamat" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Supplier Phone</label>
                    <input type="text" value="{{$supplier->supplier_phone}}" name="supplier_phone" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Supplier Status</label>
                    <input type="text" value="{{$supplier->supplier_status}}" name="supplier_status" class="form-control" id="" >
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            @endsection