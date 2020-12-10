@extends('admin.templates.default')

@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
<div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Edit Nama Penyakit</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
            <div class="card card-danger">
                <div class="card-body">
                  <!-- Date dd/mm/yyyy -->
                    <form action="" method="post">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input type="text" name="name" class="form-control" value="{{$penyakit->name}}">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                  <!-- /.form group -->
                  <!-- phone mask -->
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- /.row -->
    </div>
</div>
<!-- /.card -->
    </div>
</div>


    
@endsection
