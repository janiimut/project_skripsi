@extends('admin.templates.default')

@section('content')

<a href="{{route('admin.editciri', $ciri->id)}}" class="btn btn-primary">Edit</a>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ciri-ciri penyakit</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <form action="" method="post">
          @method('PATCH')
          @csrf
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ciri-ciri penyakit</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <input type="text" name="penyakit_id" value="{{$ciri->penyakit_id}}" hidden>
              <textarea id="ciri" name="ciri" class="form-control" rows="3">
                {{$ciri->description}}
              </textarea>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </form>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">Ciri-ciri penyakit</h3>
              <div class="col-12">
                <img src="{{ asset('img/'. $ciri->images)}}" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <p class="my-3">{!!$ciri->ciri_penyakit!!}</p>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

@endsection
