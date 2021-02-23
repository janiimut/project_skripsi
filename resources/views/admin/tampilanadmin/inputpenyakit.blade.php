@extends('admin.templates.default')

@section('content')

<form action="" method="post" enctype="multipart/form-data">
    @csrf 
    <div class="col-md-9">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Input Data Penyakit</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="form-group">
              <input class="form-control" placeholder="Nama Penyakit" name="nama">
            </div>
            <div class="form-group my-3">
                <label for="exampleInputFile">Masukan gambar</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" id="images" name="images">
                  </div>
                </div>
                <br>
            <div class="form-group">
                <textarea id="compose-textarea" name="ciri" class="form-control" style="height: 300px">
                    <h4>Ciri-ciri Penyakit</h4>
                </textarea>
            </div>
            <div class="form-group">
                <textarea id="compose-textarea2" name="solusi" class="form-control" style="height: 300px">
                    <h4>Solusi Penyakit</h4>
                </textarea>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="informasi" id="informasi" placeholder="Informasi">
            </div>
          </div>
          <!-- /.card-body -->
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
@endsection
