<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sukuna: El Mal Encarnado</title>
    {{-- Logo --}}
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.svg') }}">

    {{-- Importacion de bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Importacion de estilos propios --}}
    <link rel="stylesheet" href="{{ asset('assets/css/games.css') }}">
</head>

<body class="wrapper">
    {{-- NavBar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top mb-5">
        <div class="container-fluid">
            <div class="me-3 ">
                <img src="{{ asset('assets/images/itadori.png') }}" alt="Yuuji Itadori" width="60">
            </div>

            <div>
                <a class="navbar-brand" href="{{ route('games.index') }}">Jujutsu Kaisen</a>
                <img src="{{ asset('assets/images/satoru.png') }}" alt="Satoru Gojo" width="60">
            </div>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-5" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Principal
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('games.index') }}">Inicio</a></li>
                            <li><a class="dropdown-item" href="{{ route('games.galeria_imagenes') }}">Galeria de
                                    Imagenes</a></li>
                            <li><a class="dropdown-item" href="{{ route('games.listado_personajes') }}">Listado de
                                    personajes</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Bootstrap
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('games.componentes') }}">Componentas</a></li>
                            <li><a class="dropdown-item" href="#">Imagenes y Formularios</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Contenido principal --}}
    <main class="mt-5">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="footer bg-dark text-white text-center py-4">
        <div class="container">
            <span>© 2024 Todos los derechos reservados</span>
        </div>
    </footer>

    {{-- Scripts de bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
