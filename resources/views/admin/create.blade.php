@extends('layout.conten')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/admin/store" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Admin Level</label>
                    <input type="text" name="admin_level" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Admin Nama</label>
                    <input type="text" name="admin_nama" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Admin Status</label>
                    <input type="text" name="admin_status" class="form-control" id="exampleInputPassword1">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            @endsection