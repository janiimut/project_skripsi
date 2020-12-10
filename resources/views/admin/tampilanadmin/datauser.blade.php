@extends('admin.templates.default')

@section('content')

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

        </tr>
        </thead>
        <tbody>
            @foreach ($datauser as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name}}</td>
        </tr>
        
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
    
@endsection