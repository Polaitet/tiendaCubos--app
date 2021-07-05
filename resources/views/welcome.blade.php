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
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://www.dalpa.es/wp-content/uploads/2019/10/banner-8-rubiks-aniversario2.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://blog.kubekings.com/wp-content/uploads/2017/11/BANNER-2X2-BLOG-KUBEKINGS-1024x276.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://blog.kubekings.com/wp-content/uploads/2017/10/BANNER-3X3-BLOG-KUBEKINGS-1-1024x276.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="https://kubekings.fr/25714-home_default/x-man-tornado-v2-3x3.jpg" alt="Card image cap" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">xmd tornado v2</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://cdn.kubekings.com/25670-medium_default/mf8-mater-fto.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MF8 Mater FTO</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://cdn.kubekings.com/25686-home_default/lee-mirror-4x4.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Mirror 4x4</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
