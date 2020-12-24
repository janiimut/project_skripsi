@extends('admin.templates.default')

@section('content')

<a href="{{route('admin.editsolusi', $solusi->id)}}" class="btn btn-primary">Edit</a>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Solusi Penyakit</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">Solusi Penyakit</h3>
              <div class="col-12">
                <img src="{{ asset('img/'. $solusi->images)}}" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <p class="my-3">{!! $solusi->solusi_penyakit !!}</p>

            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

@endsection

