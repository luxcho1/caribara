@extends('layouts.app')
@section('content')

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furniture Store</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome 6 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .product-image {
      max-width: 200px;
      height: auto;
    }
    .price {
      font-size: 24px;
    }
    .testimonial {
      background-color: #f8f9fa;
      padding: 50px 0;
    }
  </style>
</head>
<body>



<!-- Carousel -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/index1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/index2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/index3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

<!-- Featured Products -->
<div class="container my-5">
  <h2 class="text-center mb-4">Productos destacados</h2>
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="/images/home1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Estante Garcia</h5>
          <p class="card-text">Estanto hecho 100% de pino</p>
          <p class="price">$100.000</p>
          <a href="#" class="btn btn-primary">Obtener más detalles</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="/images/home2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Respaldo Garcia</h5>
          <p class="card-text">El accesorio ideal para tu cama</p>
          <p class="price">$120.000</p>
          <a href="dormitorio/1" class="btn btn-primary">Obtener más detalles</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="/images/home3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Cama Liberty</h5>
          <p class="card-text">Perfecta cama para la regalona de la casa</p>
          <p class="price">$100.000</p>
          <a href="dormitorio/4" class="btn btn-primary">Obtener más detalles</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Testimonials -->
<div class="testimonial">
  <div class="container">
    <h2 class="text-center mb-4">Opiniones</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <p class="card-text">"Tienen el mejor precio en comparacion a la competencia"</p>
            <footer class="blockquote-footer">Sofia Caceres</footer>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <p class="card-text">"Arme mi casa completamente con muebles capibara y estoy super feliz"</p>
            <footer class="blockquote-footer">Antonio Pizarro</footer>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <p class="card-text">"Su servicio de envio es super rapido!!!"</p>
            <footer class="blockquote-footer">Alejandra Vasquez</footer>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
@endsection
