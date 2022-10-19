@extends('layout.conten')

@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Jenis</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <a href="/jenis/create" class="btn btn-primary">Tambah Data</a>
                  <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Jenis</th>
                    <th>Jenis Nama</th>
                    <th>Jenis Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
@foreach($jenis as $bar)
                  <tbody>
                  <tr>
                    <td>{{ $bar->id_jenis }}</td>
                    <td>{{ $bar->jenis_nama }}</td>
                    <td>{{ $bar->jenis_status }}</td>
                    <td><a href="/jenis/edit/{{ $bar->id }}" class="btn btn-success">Edit</a>
                        <a href="/jenis/destroy/{{ $bar->id }}" class="btn btn-danger">Delete</a>
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
