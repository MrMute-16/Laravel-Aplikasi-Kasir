@extends('layout.conten')

@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <a href="/transaksi/create" class="btn btn-primary">Tambah Data</a>
                  <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Transaksi</th>
                    <th>Id Admin</th>
                    <th>Transaksi Tanggal</th>
                    <th>Transaksi Nota</th>
                    <th>Transaksi Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
@foreach($transaksi as $bar)
                  <tbody>
                  <tr>
                    <td>{{ $bar->id_transaksi }}</td>
                    <td>{{ $bar->id_admin }}</td>
                    <td>{{ $bar->transaksi_tanggal }}</td>
                    <td>{{ $bar->transaksi_nonota }}</td>
                    <td>{{ $bar->transaksi_status }}</td>
                    <td><a href="/transaksi/detail/{{$bar->id_transaksi}}" class="btn btn-light">Detail</a>
                      <a href="/transaksi/edit/{{ $bar->id }}" class="btn btn-success">Edit</a>
                        <a href="/transaksi/destroy/{{ $bar->id }}" class="btn btn-danger">Delete</a>
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
