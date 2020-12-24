@extends('admin.templates.default')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Solusi penyakit</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <form action="" method="post">
                          @method('PATCH')
                          @csrf
                        <div class="form-group">
                            <input type="text" name="name" value="{{$data->name}}" hidden>
                            <textarea id="compose-textarea" name="solusi_penyakit" class="form-control" style="height: 300px">
                              {{$data->solusi_penyakit}}
                            </textarea>
                            <input type="text" name="ciri_penyakit" value="{{$data->ciri_penyakit}}" hidden>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
    </section>

@endsection
