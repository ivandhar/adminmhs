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
    <form action="{{ route('postupdate',$mahasiswas->id) }}" method="post">
        @csrf
        {{-- @method('PUT') --}}
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Lengkap</label>
          <input value="{{ $mahasiswas->nama }}" type="nama" name="nama" id="nama" class="form-control" id="exampleInputEmail1" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input  type="email" name="email" id="email" class="form-control" id="exampleInputEmail1" value="{{ $mahasiswas->email }}">
          </div>
          <div class="form-group">
            <label>Jurusan</label>
            <select  type="jurusan" name="jurusan" id="jurusan" class="form-control select2" style="width: 100%;">
              <option {{ $mahasiswas->jurusan =="TI" ? 'selected' : '' }}>TI</option>
              <option {{ $mahasiswas->jurusan =="SI" ? 'selected' : '' }}>SI</option>
              <option {{ $mahasiswas->jurusan =="IK" ? 'selected' : '' }}>IK</option>
            </select>
          </div>
          <div class="form-group">
            <label>Waktu</label>
            <select  type="waktu" name="waktu" id="waktu" class="form-control select2" style="width: 100%;">
              <option {{ $mahasiswas->waktu =="pagi" ? 'selected' : '' }}>pagi</option>
              <option {{ $mahasiswas->waktu =="siang" ? 'selected' : '' }} >siang</option>
              <option {{ $mahasiswas->waktu =="malam" ? 'selected' : '' }} >malam</option>
            </select>
          </div>
          <div class="form-group">
            <label>Gender</label>
            <select  type="gender" name="gender" id="gender" class="form-control select2" style="width: 100%;">
              <option {{ $mahasiswas->gender =="Laki-laki" ? 'selected' : '' }}>Laki-laki</option>
              <option {{ $mahasiswas->gender =="perempuan" ? 'selected' : '' }}>perempuan</option>
            </select>
          </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
