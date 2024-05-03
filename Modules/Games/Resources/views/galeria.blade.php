@extends('games::layouts.master')

@section('content')
    <div class="container-fluid index-container">
        {{-- Primera fila de imagenes --}}
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <img src="{{ asset('assets/images/imagen-13.png') }}" class="img-fluid" alt="">
            </div>
        </div>

        {{-- egunda fila de imagenes --}}
        <div class="row mb-3">
            <div class="col-md-3 mb-3">
                <img src="{{ asset('assets/images/imagen-1.png') }}" class="img-fluid" alt="Imagen 1">
            </div>
            <div class="col-md-3 mb-3">
                <img src="{{ asset('assets/images/imagen-2.png') }}" class="img-fluid" alt="Imagen 2">
            </div>
            <div class="col-md-3 mb-3">
                <img src="{{ asset('assets/images/imagen-3.png') }}" class="img-fluid" alt="Imagen 3">
            </div>
            <div class="col-md-3 mb-3">
                <img src="{{ asset('assets/images/imagen-4.png') }}" class="img-fluid" alt="Imagen 4">
            </div>
        </div>

        {{-- Tercera fila de imagenes --}}
        <div class="row mb-3">
            <div class="col-md-3 mb-3">
                <img src="{{ asset('assets/images/imagen-5.png') }}" class="img-fluid" alt="Imagen 1">
            </div>
            <div class="col-md-3 mb-3">
                <img src="{{ asset('assets/images/imagen-6.png') }}" class="img-fluid" alt="Imagen 2">
            </div>
            <div class="col-md-3 mb-3">
                <img src="{{ asset('assets/images/imagen-7.png') }}" class="img-fluid" alt="Imagen 3">
            </div>
            <div class="col-md-3 mb-3">
                <img src="{{ asset('assets/images/imagen-8.png') }}" class="img-fluid" alt="Imagen 4">
            </div>
        </div>

        {{-- Quinta fila de imagenes --}}
        <div class="row mb-3">
            <div class="col-md-3 mb-3">
                <img src="{{ asset('assets/images/imagen-9.png') }}" class="img-fluid" alt="Imagen 1">
            </div>
            <div class="col-md-3 mb-3">
                <img src="{{ asset('assets/images/imagen-10.png') }}" class="img-fluid" alt="Imagen 2">
            </div>
            <div class="col-md-3 mb-3">
                <img src="{{ asset('assets/images/imagen-11.png') }}" class="img-fluid" alt="Imagen 3">
            </div>
            <div class="col-md-3 mb-3">
                <img src="{{ asset('assets/images/imagen-12.png') }}" class="img-fluid" alt="Imagen 4">
            </div>
        </div>

        {{-- Sexta Fila de Imagenes --}}
        <div class="row mb-3">
            <div class="col-md-6">
                <img src="{{ asset('assets/images/imagen-14.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/images/imagen-15.png') }}" class="img-fluid" alt="">
            </div>
        </div>

        {{-- Septima fila de imagenes --}}
        <div class="row mb-3">
            <div class="col-md-12">
                <img src="{{ asset('assets/images/imagen-17.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
