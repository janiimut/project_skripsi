<!doctype html>
<html lang="en">
    @include('user.partials.head')
  <body>
    @include('user.partials.header')

    <main role="main">
        <div class="container marketing my-5">
            <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading">{{$data->name}}</h2>
                  <p class="lead">Informasi : {!!$data->informasi!!} </p>
                  <p class="lead">Ciri-ciri Penyakit : {!!$data->ciri_penyakit!!} </p>
                  <p class="lead">Solusi Penyakit : {!!$data->solusi_penyakit!!}</p>
                </div>
                <div class="col-md-5">
                  <img src="{{asset('img/' . $data->images)}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
                </div>
            </div>
        </div>     
    </main>
</body>
</html>









































