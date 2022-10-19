@extends('layout.conten')

@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Admin</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <a href="/supplier/create" class="btn btn-primary">Tambah Data</a>
                  <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Suppllier</th>
                    <th>Supplier Nama</th>
                    <th>Supplier Alamat</th>
                    <th>Supplier Phone</th>
                    <th>Supplier Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
@foreach($supplier as $bar)
                  <tbody>
                  <tr>
                    <td>{{ $bar->id_supplier }}</td>
                    <td>{{ $bar->supplier_nama }}</td>
                    <td>{{ $bar->supplier_alamat }}</td>
                    <td>{{ $bar->supplier_phone }}</td>
                    <td>{{ $bar->supplier_status }}</td>
                    <td><a href="/supplier/edit/{{ $bar->id }}" class="btn btn-success">Edit</a>
                        <a href="/supplier/destroy/{{ $bar->id }}" class="btn btn-danger">Delete</a>
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
