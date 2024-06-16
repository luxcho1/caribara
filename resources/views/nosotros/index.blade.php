@extends('layouts.app')

@section('content')
<div class="container">
    <div class="maintenance-message">
        <h1>El sitio está en mantenimiento</h1>
        <p>Estamos trabajando para mejorar tu experiencia. Por favor, vuelve más tarde.</p>
    </div>
</div>
@endsection

<style>
    .maintenance-message {
        text-align: center;
        margin-top: 50px;
    }
    .maintenance-message h1 {
        font-size: 2rem;
        color: #333;
        margin-bottom: 20px;
    }
    .maintenance-message p {
        font-size: 1rem;
        color: #666;
    }
</style>
