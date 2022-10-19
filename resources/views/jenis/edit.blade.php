@extends('layout.conten')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Jenis</h3>
              </div>
              <form action="/jenis/update/{{$jenis->id}}" method="post">
                @csrf
                @method('put')
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Id Jenis</label>
                    <input type="text" value="{{$jenis->id_jenis}}" name="id_jenis" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Jenis Nama</label>
                    <input type="text" value="{{$jenis->jenis_nama}}" name="jenis_nama" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                    <label for="">Jenis Status</label>
                    <input type="text" value="{{$jenis->jenis_status}}" name="jenis_status" class="form-control" id="" >
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            @endsection