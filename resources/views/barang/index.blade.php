@extends('layout.conten')

@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Admin</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <a href="/barang/create" class="btn btn-primary">Tambah Data</a>
                  <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Barang</th>
                    <th>Barang Kode</th>
                    <th>Barang Nama</th>
                    <th>Jenis</th>
                    <th>Supplier</th>
                    <th>Harga Jual</th>
                    <th>Barang Status</th>
                    <th>Action</th>
                  </tr>            
                  </thead>
@foreach($barang as $bar)
                  <tbody>
                  <tr>
                    <td>{{ $bar->id_barang }}</td>
                    <td>{{ $bar->barang_kode }}</td>
                    <td>{{ $bar->barang_nama }}</td>
                    <td>{{ $bar->jenis_nama }}</td>
                    <td>{{ $bar->supplier_nama }}</td>
                    <td>{{ $bar->harga_jual }}</td>
                    <td>{{ $bar->barang_status }}</td>
                    <td><a href="/barang/edit/{{ $bar->id }}" class="btn btn-success">Edit</a>
                        <a href="/barang/destroy/{{ $bar->id }}" class="btn btn-danger">Delete</a>
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
