@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <div class="form-container">
        <form id="myForm" style="max-width: 400px; margin: 0 auto;">
            <h2 class="mb-4">Formulario para repuestos</h2>
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
              <label for="address" class="form-label">Dirección:</label>
              <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>
            <div class="mb-3">
              <label for="manillas" class="form-label">Manillas:</label>
              <input type="number" class="form-control" id="manillas" name="manillas" min="0" max="50" required onchange="calculateTotal()">
            </div>
            <div class="mb-3">
              <label for="bisagras" class="form-label">Bisagras:</label>
              <input type="number" class="form-control" id="bisagras" name="bisagras" min="0" max="50" required onchange="calculateTotal()">
            </div>
            <div class="mb-3">
              <label for="patas-goma" class="form-label">Patas goma:</label>
              <input type="number" class="form-control" id="patas-goma" name="patas-goma" min="0" max="50" required onchange="calculateTotal()">
            </div>
            <div class="mb-3">
              <label for="riel" class="form-label">Riel:</label>
              <input type="number" class="form-control" id="riel" name="riel" min="0" max="50" required onchange="calculateTotal()">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
          </form>
          
          <div id="message" class="message-box"></div>
          <div id="total" class="mt-4"></div>
          
      </div>
    </div>
    <div class="col-md-6">
      <div class="info-container">
        <h2 class="mb-4">Precio repuestos</h2>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Repuesto</th>
              <th scope="col">Precio</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Manillas</td>
              <td>$4.000</td>
            </tr>
            <tr>
              <td>Bisagras</td>
              <td>$5.000</td>
            </tr>
            <tr>
              <td>Patas Gomas</td>
              <td>$10.000</td>
            </tr>
            <tr>
                <td>Riel</td>
                <td>$20.000</td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
function calculateTotal() {
  var manillas = document.getElementById("manillas").value;
  var bisagras = document.getElementById("bisagras").value;
  var patasGoma = document.getElementById("patas-goma").value;
  var riel = document.getElementById("riel").value;

  var total = (manillas * 4000) + (bisagras * 5000) + (patasGoma * 10000) + (riel * 20000);

  document.getElementById("total").innerHTML = "Total: $" + total.toLocaleString();
}

document.getElementById("myForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Evita el envío por defecto del formulario
  
  // Muestra el mensaje de éxito
  var messageBox = document.getElementById("message");
  messageBox.style.display = "block";
  messageBox.innerHTML = "Formulario enviado correctamente <button onclick=\"acceptForm()\">OK</button>";

  // Limpia el formulario
  document.getElementById("myForm").reset();
  // Limpia el total
  document.getElementById("total").innerHTML = "";
});

function acceptForm() {
  document.getElementById("message").style.display = "none";
}
</script>
@endsection

<style>
  .info-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }
  .message-box {
    display: none;
    background-color: #f2f2f2;
    border-radius: 5px;
    padding: 20px;
    margin-top: 20px;
    text-align: center;
  }
</style>
