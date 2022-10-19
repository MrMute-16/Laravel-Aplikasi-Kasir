@extends('layout.conten')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/barang/store" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Barang Kode</label>
                    <input type="text" name="barang_kode" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Barang Nama</label>
                    <input type="text" name="barang_nama" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Id Jenis</label>
                    <select name="id_jenis" class="form-control">
                      <option value=""><-Pilih-></option>
                      @foreach($jenis as $row)
                      <option value="{{$row->id_jenis}}">{{$row->jenis_nama}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Id Supplier</label>
                    <select name="id_supplier" class="form-control">
                      <option value=""><-Pilih-></option>
                      @foreach($supplier as $bar)
                      <option value="{{$bar->id_supplier}}">{{$bar->supplier_nama}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Harga jual</label>
                    <input type="text" name="harga_jual" class="form-control" id="">
                  </div>
                  <div class="form-group">
                    <label for="">Barang Status</label>
                    <input type="text" name="barang_status" class="form-control" id="">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            @endsection