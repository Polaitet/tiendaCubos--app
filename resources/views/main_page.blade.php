@extends('layouts.master_main-page')
@section('products')
    {{dd($productsData)}}
<div class="card-group mb-4">
    <div class="card">
        <img class="card-img-top" src="https://cdn.kubekings.com/25772-medium_default/sengso-star-spinner.jpg" alt="Card image cap" alt="Card image cap">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title">SengSo Star Spinner</h5>
            <p class="card-text">El SengSo Star Spinner es un cubo de lo más sencillo y divertido de resolver, es como un Floppy Megaminx 3x3x1, en esta versión tan solo están permitidos los giros de 180 grados en las caras laterales, no es versión super Floppy, por lo que los giros de 90 grados están prohibidos.</p>

            <button type="button" class="btn btn-primary mt-auto offset-6">Añadir a la cesta</button>

        </div>
    </div>


</div>

@endsection
