@extends('layout.v_template')
@section('title','Input Mata Kuliah')
@section('content')
@csrf
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('input') }}" method="post">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Lengkap</label>
          <input  type="nama" name="nama" id="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input  type="email" name="email" id="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label>Jurusan</label>
            <select  type="jurusan" name="jurusan" id="jurusan" class="form-control select2" style="width: 100%;">
              <option selected="selected">TI</option>
              <option>SI</option>
              <option>IK</option>
            </select>
          </div>
          <div class="form-group">
            <label>Waktu</label>
            <select  type="waktu" name="waktu" id="waktu" class="form-control select2" style="width: 100%;">
              <option selected="selected">pagi</option>
              <option>siang</option>
              <option>malam</option>
            </select>
          </div>
          <div class="form-group">
            <label>Gender</label>
            <select  type="gender" name="gender" id="gender" class="form-control select2" style="width: 100%;">
              <option selected="selected">Laki-laki</option>
              <option>perempuan</option>
            </select>
          </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
