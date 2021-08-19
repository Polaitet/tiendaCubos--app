<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row offset-5 offset-lg-8 offset-md-8">
            @guest
                @if (Route::has('login'))
                    <div class="mr-1">
                        <button type="button" class="btn btn-light align-self-end"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></button>
                    </div>
                @endif

                @if (Route::has('register'))

                        <button type="button" class="btn btn-light align-self-end"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></button>

                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </div>
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
                <?php $firstIteration = true; ?>
                @foreach($sliderData as $slider)
                    @if($firstIteration)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$slider->order}}" class="active"></li>
                        <?php $firstIteration = false; ?>
                    @else
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$slider->order}}"></li>
                    @endif
                @endforeach
            </ol>
            <div class="carousel-inner">
            <?php $firstIteration = true; ?>
            @foreach($sliderData as $slider)
                    @if($firstIteration)
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{$slider->url}}" alt="{{$slider->order}}-slide">
                        </div>
                        <?php $firstIteration = false; ?>
                    @else
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{$slider->url}}" alt="{{$slider->order}}-slide">
                        </div>
                    @endif
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        <br>
        </div>

        @yield('products')

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
