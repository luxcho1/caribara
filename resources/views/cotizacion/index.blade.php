@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <div class="form-container">
        <h2 class="mb-4">Formulario Cotización Mueble</h2>
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Correo:</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Celular:</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Mensaje:</label>
            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="specs" class="form-label">Especificaciones:</label>
            <textarea class="form-control" id="specs" name="specs" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Dirección:</label>
            <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-submit btn-block">Enviar</button>
        </form>
      </div>
    </div>
    <div class="col-md-6">
      <div class="info-container">
        <h2 class="mb-4">Precio Instalación Muebles a Medida</h2>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Modificación</th>
              <th scope="col">Precio</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>sobre 20cm</td>
              <td>$35.000</td>
            </tr>
            <tr>
              <td>de 11cm a 19cm</td>
              <td>$25.000</td>
            </tr>
            <tr>
              <td>de 1cm a 10cm</td>
              <td>$15.000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

<style>
  .info-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }
</style>
