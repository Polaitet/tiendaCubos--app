@extends('layouts.master_main-page')
@section('products')
<div class="card-group mb-4">
    <div class="card">
        <img class="card-img-top" src="https://cdn.kubekings.com/25772-medium_default/sengso-star-spinner.jpg" alt="Card image cap" alt="Card image cap">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title">SengSo Star Spinner</h5>
            <p class="card-text">El SengSo Star Spinner es un cubo de lo más sencillo y divertido de resolver, es como un Floppy Megaminx 3x3x1, en esta versión tan solo están permitidos los giros de 180 grados en las caras laterales, no es versión super Floppy, por lo que los giros de 90 grados están prohibidos.</p>

            <button type="button" class="btn btn-primary mt-auto offset-6">Añadir a la cesta</button>

        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="https://cdn.kubekings.com/17194-medium_default/x-man-volt-square-1-v2-magnetico.jpg" alt="Card image cap">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title">X-Man Volt Square-1 V2 Magnético</h5>
            <p class="card-text">Este es un SQ-1 de última generación, tiene un aspecto genial además de un giro increíble, es uno de los pocos Square-1 del mercado que viene con imanes de posicionamiento instalados de fábrica.</p>

            <button type="button" class="btn btn-primary offset-6 mt-auto">Añadir a la cesta</button>

        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="https://cdn.kubekings.com/21160-medium_default/meilong-pyraminx-m.jpg" alt="Card image cap">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title">MeiLong Pyraminx M</h5>
            <p class="card-text">Los imanes le dan una sensación magnética muy buena y aumentan considerablemente el rendimiento de este pyraminx.</p>
            <button type="button" class="btn btn-primary offset-6 mt-auto">Añadir a la cesta</button>
        </div>
    </div>
</div>

@endsection
