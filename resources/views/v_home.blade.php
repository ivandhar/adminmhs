@extends('layout.v_template')
@section('title','HOME')
@section('content')
@if (Auth::check())
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Table mahasiswa</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>no</th>
          <th>nama</th>
          <th>email</th>
          <th>waktu</th>
          <th>jurusan</th>
          <th>gender</th>
          <th>button</th>
        </tr>
        </thead>
        <tbody>

            @foreach ($mahasiswas as $mahasiswa )

            <tr>
              <td class="text-center">{{ ++$i }}</td>
              <td>{{ $mahasiswa->nama }}</td>
              <td>{{ $mahasiswa->email }}</td>
              <td>{{ $mahasiswa->waktu }}</td>
              <td>{{ $mahasiswa->jurusan }}</td>
              <td>{{ $mahasiswa->gender }}</td>
              <td><a class="btn btn-primary btn-sm" href="{{ route('getedit',$mahasiswa->id) }}">Edit</a>
                  <form action="{{ route('postdelete',$mahasiswa->id) }}" method="POST">
                      @csrf
              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                  </form>
              </td>

                  {{-- @csrf
                  @method('DELETE') --}}



            </tr>

            @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>no</th>
          <th>nama</th>
          <th>email</th>
          <th>waktu</th>
          <th>jurusan</th>
          <th>gender</th>
          <th>gender</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@else
Login terlebih dahulu
@endif

    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->

@endsection
