@extends('admin.templates.default')

@section('content')

@if (session('status'))
    
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
    
@endif

<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <a href="inputpenyakit" class="btn btn-primary btn-sm" >
        Input Penyakit
      </a>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama Penyakit</th>
          <th>Lihat</th>
          <th>Proses</th>

        </tr>
        </thead>
        <tbody>
            @foreach ($penyakits as $penyakit)
        <tr>
            <td>{{ $penyakit->id }}</td>
            <td>{{ $penyakit->name}}</td>
            <td>
            <a href="penyakit/{{$penyakit->id}}" class="btn btn-primary btn-sm" >
                Ciri-ciri penyakit
              </a>
                <a href="solusipenyakit/{{$penyakit->id}}" class="btn btn-primary btn-lg active btn-sm" >Solusi Penyakit</a>
            </td>
            <td>
              <a href="edit/penyakit/{{$penyakit->id}}"><i class="fas fa-edit fa-1x text-warning"></i></a>/
              <a href=""><i class="fas fa-trash fa-1x text-danger"></i></a>
            </td>
        </tr>
        
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
    
@endsection

