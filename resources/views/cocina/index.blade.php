@extends('layouts.app')
@section('content')

<body>
    <div class="container text-center d-flex justify-content-center">
        <div class="row">
          <div class="col">
            <div class="card" style="width: 35rem;">
                <img src="/images/cocina1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Estante Garcia</h5>
                  <p class="card-text"></p>
                  <a href="cocina/1" class="btn btn-primary">Obtener más informacion</a>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card" style="width: 35rem;">
                <img src="/images/cocina2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Estante Liberty</h5>
                  <p class="card-text"></p>
                  <a href="cocina/2" class="btn btn-primary">Obtener más informacion</a>
                </div>
              </div>
          </div>
        </div>
      </div>
</body>
@endsection
