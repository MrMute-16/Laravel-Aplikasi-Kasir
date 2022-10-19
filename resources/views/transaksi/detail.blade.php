@extends('layout.conten')

@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Transaksi</h3>
              </div>
              <div class="card-body">
                  <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Transaksi Detail</th>
                    <th>Id Barang</th>
                    <th>Transaksi Jenis</th>
                    <th>Transaksi Harga</th>
                    <th>Transaksi Jumlah</th>
                    <th>Transaksi Detail_Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
@foreach($detail as $bar)
                  <tbody>
                  <tr>
                    <td>{{ $bar->id_transaksi_detail }}</td>
                    <td>{{ $bar->id_barang }}</td>
                    <td>{{ $bar->transaksi_jenis }}</td>
                    <td>{{ $bar->transaksi_harga }}</td>
                    <td>{{ $bar->transaksi_jumlah }}</td>
                    <td>{{ $bar->transaksi_detail_status }}</td>
                    <td><a href="/transaksi/detail/edit/{{ $bar->id }}" class="btn btn-success">Edit</a>
                        <a href="/transaksi/detail/destroy/{{ $bar->id }}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  </tbody>
@endforeach
                </table>
              </div>
            </div>
         
@endsection
