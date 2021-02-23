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
          <?php $i = 0; ?>
            @foreach ($penyakits as $penyakit)
            <?php $i++; ?>
        <tr>
            <td>{{$i}}</td>
            <td>{{ $penyakit->name}}</td>
            <td>
            <a href="informasi/{{$penyakit->id}}" class="btn btn-success btn-sm" >
                Informasi
              </a>
            <a href="penyakit/{{$penyakit->id}}" class="btn btn-primary btn-sm" >
                Ciri-ciri penyakit
              </a>
                <a href="solusipenyakit/{{$penyakit->id}}" class="btn btn-primary btn-lg active btn-sm" >Solusi Penyakit</a>
            </td>
            <td>
              <a href="edit/penyakit/{{$penyakit->id}}"><i class="fas fa-edit fa-1x text-warning"></i></a>/
              <button href="{{ route('admin.delete', $penyakit->id)}}" id="delete"><i class="fas fa-trash fa-1x text-danger"></i></button>
              <form action="" method="post" id="deleteForm">
                @csrf
                @method("DELETE")
                <input type="submit" value="Hapus" class="btn btn-danger" style="display: none">
              </form>
            </td>
        </tr>
        
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
    
@endsection

@push('script')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script>
  $('button#delete').on('click', function(e){
    e.preventDefault();
    var href = $(this).attr('href');

    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes'
    }).then((result) => {
      if (result.isConfirmed) {

        document.getElementById('deleteForm').action = href;
        document.getElementById('deleteForm').submit();
        
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Your work has been saved',
          showConfirmButton: false,
          timer: 1500
        })
      }
    })
  })
</script>
@endpush
