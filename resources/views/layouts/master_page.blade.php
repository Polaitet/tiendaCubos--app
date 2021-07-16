<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <div class="justify-content-center" style="display: flex">
        <img style="max-width: 50px;" src="https://i.ibb.co/pz38g7M/Sin-t-tulo-1.png" class="" alt="logo">
        <h1 class="mt-1">Rubiklandia</h1>
    </div>
    <hr>
    <ul class="nav justify-content-center mt-2" style="font-size: 1.6rem">
        <li class="nav-item">
            <a class="nav-link active" href="#">Cubos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Cuboides</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Minx</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Modificaciones</a>
        </li>
    </ul>

    @yield('content')

    <div class="row">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="fixed-bottom align-self-end" style="margin: 10px">
            <button type="button" class="btn btn-outline-primary">Subir</button>
        </div>
    </div>
    <div class="mb-4">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="#">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Quienes somos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Metodos de pago</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ayda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Politica de privacidad</a>
            </li>
        </ul>
    </div>

    <div style="text-align:right">
        <small>Pagina web registrada con copiright</small>
    </div>
</div>
</body>
</html>
