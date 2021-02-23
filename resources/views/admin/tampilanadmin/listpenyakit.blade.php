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

        </tr>
        </thead>
        <tbody>
          <?php $i = 0; ?>
            @foreach ($penyakits as $penyakit)
            <?php $i++; ?>
        <tr>
            <td>{{$i}}</td>
            <td>{{ $penyakit->name}}</td>
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
