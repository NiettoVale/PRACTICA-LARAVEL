@extends('games::layouts.master')

@section('content')
    <div class="index-container">
        {{-- Hero Image --}}
        <img class="img-fluid mb-3" src="https://acortar.link/rzreNB" />

        {{-- Acordeones con la descripcion de cada temporada --}}
        <p class="h3 p-2 text-center">Resumen de las temporadas:</p>
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        Temporada 0
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        <strong>Descripción:</strong> La historia sigue a Yuta Okkotsu, un
                        estudiante de secundaria que posee una maldición poderosa dentro de él. Después de presenciar la
                        trágica
                        muerte de su amiga Rika, quien se convirtió en una maldición, Yuta se sumerge en la
                        desesperación y
                        el
                        aislamiento. Sin embargo, es reclutado por Satoru Gojo, un hechicero poderoso, para unirse a la
                        escuela
                        de jujutsu y aprender a controlar su maldición.

                        A medida que Yuta se adapta a su nueva vida como estudiante de jujutsu, se enfrenta a desafíos
                        tanto
                        internos como externos. Se encuentra con otros estudiantes, incluidos Maki Zenin y Toge Inumaki,
                        y
                        forma
                        vínculos con ellos. Sin embargo, su pasado y su conexión con Rika continúan persiguiéndolo.

                        La trama se centra en los esfuerzos de Yuta por aceptar su destino y controlar su maldición, así
                        como en
                        su lucha por proteger a quienes ama. Se revelan secretos sobre el origen de su maldición y la
                        naturaleza
                        del mundo de jujutsu.

                        La película explora temas de pérdida, redención y el peso del pasado mientras Yuta lucha por
                        encontrar
                        su lugar en el mundo de los hechiceros. Con una combinación de acción emocionante y desarrollo
                        de
                        personajes conmovedor, "Jujutsu Kaisen 0" ofrece una experiencia cinematográfica emocionante y
                        conmovedora que complementa la serie principal.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        Temporada 1
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <strong>Descripción:</strong> La historia se centra en Yuji Itadori, un estudiante de secundaria
                        con
                        habilidades físicas excepcionales. Tras la muerte de su abuelo, Yuji se encuentra con un objeto
                        maldito,
                        el dedo de Sukuna, un rey demonio. Al intentar proteger a sus amigos de un ataque de
                        maldiciones,
                        Yuji
                        consume el dedo, lo que le otorga poderes demoníacos. Se une a la escuela de jujutsu para
                        aprender a
                        controlar sus habilidades y luchar contra las maldiciones. Conoce a Megumi Fushiguro y Nobara
                        Kugisaki,
                        otros estudiantes de jujutsu, y juntos enfrentan diversas amenazas. Se revela que Sukuna reside
                        dentro
                        de Yuji y planea recuperar su forma completa.

                        Durante una misión para recuperar los dedos de Sukuna, el grupo se enfrenta a maldiciones
                        poderosas
                        y a
                        otros hechiceros. Yuji desarrolla sus habilidades y demuestra ser un luchador formidable. Sin
                        embargo,
                        la presencia de Sukuna dentro de él sigue siendo una preocupación constante.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        Temporada 2
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <strong>Descripción:</strong> Después de los eventos de la primera
                        temporada, la historia continúa con Yuji y sus amigos enfrentándose a amenazas aún mayores. Se
                        revelan
                        más detalles sobre el pasado de Yuji y su conexión con Sukuna. El grupo se involucra en batallas
                        más
                        intensas contra maldiciones poderosas y otros hechiceros.

                        Además, se introducen nuevos personajes y se exploran más a fondo los conflictos dentro de la
                        comunidad
                        de jujutsu. La lucha contra Sukuna y la amenaza que representa para Yuji y el mundo sigue siendo
                        un
                        tema
                        importante.

                        La segunda temporada profundiza en los vínculos entre los personajes principales, así como en
                        las
                        consecuencias de sus acciones. Se exploran temas como el sacrificio, la lealtad y la redención
                        mientras
                        el grupo lucha por proteger a los inocentes y detener la amenaza de Sukuna.

                        Ambas temporadas ofrecen una mezcla emocionante de acción, drama y desarrollo de personajes,
                        manteniendo
                        a los espectadores en vilo mientras la historia avanza hacia su clímax..
                    </div>
                </div>
            </div>
        </div>

        {{-- Galeria de imagenes --}}
        <div class="container-sm mt-3">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/images/imagen-1.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/imagen-2.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/imagen-3.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/imagen-4.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <!-- Agrega más divs de carousel-item según el número de imágenes -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>




            <a class="btn btn-success text-center mt-3 d-flex justify-content-center align-items-center"
                href="{{ route('games.galeria_imagenes') }}">VER
                MAS</a>
        </div>
    </div>
@endsection
