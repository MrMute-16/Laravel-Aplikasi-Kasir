@extends('layout.conten')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Jenis</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/jenis/store" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Jenis Nama</label>
                    <input type="text" name="jenis_nama" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Jenis Status</label>
                    <input type="text" name="jenis_status" class="form-control" id="" >
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            @endsection