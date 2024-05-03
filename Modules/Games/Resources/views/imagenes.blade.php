@extends('games::layouts.master')

@section('content')
    {{-- Imagenes --}}
    <div class="container-fluid">
        <p class="h3 text-center">IMÁGENES TIPO THUMBNAILS</p>
        <div class="row">
            <div class="col-md-6">
                <img src="https://acortar.link/rNXQ3Q" class="img-thumbnail rounded float-start" width="400" height="400">
            </div>
            <div class="col-md-6">
                <img src="https://acortar.link/XccGX6" class="img-thumbnail rounded float-end" width="400" height="400">
            </div>
        </div>
    </div>

    {{-- Formularios --}}
    <div class="container-sm mt-5">
        <p class="h3 text-center">FORMULARIOS</p>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Nunca compartiremos tu correo electrónico con nadie más.
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Recuérdame</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <div class="container-sm mt-5">
        <p class="h4">Formularios deshabilitados</p>
        <form class="mb-4">
            <fieldset disabled>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Nunca compartiremos tu correo electrónico con nadie
                        más.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" id="exampleInputPassword2">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                    <label class="form-check-label" for="exampleCheck1">Recuérdame</label>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </fieldset>
        </form>
    </div>

    <div class="container-sm mt-5">
        <p class="h4">Grupo de formularios</p>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">$</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <span class="input-group-text">.00</span>
        </div>
    </div>

    <div class="container-sm mt-5 mb-3">
        <p class="h4">Layouts</p>

        {{-- <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form> --}}
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                <div class="valid-feedback">
                    ¡Correcto!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                <div class="valid-feedback">
                    ¡Correcto!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Nombre de usuario</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="validationCustomUsername"
                        aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Por favor, elige un nombre de usuario.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                    Por favor, proporciona una ciudad válida.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Estado</label>
                <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Elegir...</option>
                    <option>...</option>
                </select>
                <div class="invalid-feedback">
                    Por favor, selecciona un estado válido.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom05" class="form-label">Código Postal</label>
                <input type="text" class="form-control" id="validationCustom05" required>
                <div class="invalid-feedback">
                    Por favor, proporciona un código postal válido.
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Acepto los términos y condiciones
                    </label>
                    <div class="invalid-feedback">
                        Debes aceptar antes de enviar.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Enviar formulario</button>
            </div>
        </form>

    </div>

    {{-- Efecto parallax --}}
    <p class="h3 text-center">EFECTO PARALLAX</p>
    <div class="parallax-bg">
    </div>

    {{-- Hero Image --}}
    <p class="h3 text-center mt-3">HERO IMAGE</p>
    <div class="jumbotron jumbotron-fluid text-white text-center position-relative">
        <img class="img-fluid" src="https://acortar.link/JNhM2f" alt="Jujutsu Kaisen">
        <div class="overlay"></div>
        <div class="container position-absolute top-50 start-50 translate-middle">
            <h1 class="display-4" id="hero-text">JUJUTSU KAISEN</h1>
        </div>
    </div>
@endsection
