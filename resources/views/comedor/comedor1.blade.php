@extends('layouts.app')
@section('content')
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop Item</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome 6 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .product-image {
      max-width: 400px;
      height: auto;
    }
    .price {
      font-size: 24px;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      <img src="/images/comedor.jpg" class="product-image" alt="Product Image">
    </div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Mesas y Sillas Antonieta</h5>
          <p class="card-text">Hermoso comedor color cafe perfecto para combinarlo con cualquier ambiente</p>
          <p><strong>Precio:</strong> <span class="price">$280.000</span></p>
          <p><strong>Medidas:</strong> 100cm x 200cm x 80cm</p>
          <p><strong>Stock Disponible:</strong> 15</p>
          <p><strong>Materiales:</strong> Planchas, Tornillos</p>
          <p><strong>Precio Envios:</strong></p>
          <ul>
            <li>Zona 1: $120.000</li>
            <li>Zona 2: $120.000</li>
            <li>Zona 3: $100.000</li>
            <li>Zona 4: $100.000</li>
            <li>Zona 5: $120.000</li>
          </ul>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='{{ url('cotizacion-accesorios') }}'">
                <i class="fa-solid fa-paint-roller"></i> Personalizar a medida
            </button>
            
              <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fas fa-heart"></i> Añadir a la lista de deseos</button>
              <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fas fa-shopping-cart"></i> Añadir a carro</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>


@endsection
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome 6 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">