@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Proveedores</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Proveedor</th>
                <th scope="col">Rut</th>
                <th scope="col">Materiales</th>
                <th scope="col">Dirección</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ducasse Chile</td>
                <td>12122456-3</td>
                <td>
                    <ul>
                        <li>Bisagras</li>
                        <li>Riel</li>
                    </ul>
                </td>
                <td>Av Marathon 1996, Providencia</td>
            </tr>
            <tr>
                <td>Ferreteria San Martin</td>
                <td>34550981-5</td>
                <td>
                    <ul>
                        <li>Planchas Pino</li>
                        <li>Planchas Robles</li>
                        <li>Planchas Melamina</li>
                        <li>Tornillos</li>
                        <li>Topes de Gomas</li>
                        <li>Pegamento para madera</li>
                    </ul>
                </td>
                <td>Calle Buzeta 6556, Cerrillos</td>
            </tr>
            <tr>
                <td>Maderas El Experto</td>
                <td>56789876-0</td>
                <td>
                    <ul>
                        <li>Listones de Roble</li>
                        <li>Planchas de Melamina</li>
                        <li>Planchas de Pino</li>
                        <li>Planchas de Roble</li>
                        <li>Pegamento para madera</li>
                    </ul>
                </td>
                <td>Camino Lonquen 2332, Peñaflor</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="container">
    <h1 class="mb-4">Stock de Materiales</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Material</th>
                <th scope="col">Unidad</th>
                <th scope="col">Cantidad</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Listones de Roble</td>
                <td>Tiras 3mt</td>
                <td>20</td>
            </tr>
            <tr>
                <td>Planchas Roble 300x100</td>
                <td>Unidad</td>
                <td>30</td>
            </tr>
            <tr>
                <td>Planchas Melamina 300x100</td>
                <td>Unidad</td>
                <td>100</td>
            </tr>
            <tr>
                <td>Planchas Pino 300x100</td>
                <td>Unidad</td>
                <td>200</td>
            </tr>
            <tr>
                <td>Manillas</td>
                <td>Unidad</td>
                <td>10</td>
            </tr>
            <tr>
                <td>Tornillos</td>
                <td>Unidad</td>
                <td>1000</td>
            </tr>
            <tr>
                <td>Pegamento (100ml)</td>
                <td>Unidad</td>
                <td>20</td>
            </tr>
            <tr>
                <td>Bisagras</td>
                <td>Unidad</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Patas de goma</td>
                <td>Unidad</td>
                <td>90</td>
            </tr>
            <tr>
                <td>Riel</td>
                <td>Unidad</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
