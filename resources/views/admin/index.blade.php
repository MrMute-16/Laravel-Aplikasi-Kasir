@extends('layout.conten')

@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Admin</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <a href="/admin/create" class="btn btn-primary">Tambah Data</a>
                  <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Admin</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Admin Level</th>
                    <th>Admin Nama</th>
                    <th>Admin Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
@foreach($admin as $bar)
                  <tbody>
                  <tr>
                    <td>{{ $bar->id_admin }}</td>
                    <td>{{ $bar->username }}</td>
                    <td>{{ $bar->password }}</td>
                    <td>{{ $bar->admin_level }}</td>
                    <td>{{ $bar->admin_nama }}</td>
                    <td>{{ $bar->admin_status }}</td>
                    <td><a href="/admin/edit/{{ $bar->id }}" class="btn btn-success">Edit</a>
                        <a href="/admin/destroy/{{ $bar->id }}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  </tbody>
@endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
         
@endsection
