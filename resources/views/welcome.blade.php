@extends('layouts.app')

@section('title', 'Barrio Amigo')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('imgs/banner-1.jpg') }}" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('imgs/banner-2.jpg') }}" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('imgs/banner-3.jpg') }}" class="d-block w-100">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<br>
<div class="row justify-content-center">
    <a class="col-md-4 acceso nosotros" href="{{ url('/we') }}"></a>
    <a class="col-md-4 acceso eventos" href="{{ url('events') }}"></a>
    <a class="col-md-4 acceso actualidad" href="{{ url('tidings') }}"></a>
</div>
<br>
<div class="row justify-content-center">
    <a class="col-md-4 acceso directorio" href="{{ url('directories') }}"></a>
    <a class="col-md-4 acceso contacto" href="#"></a>
</div>
<br>
<hr class="hr-text" data-content="Productos de nuestros artesanos">
<br>
<div class="card-group">
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('imgs/artesano1.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title text-center">Aloe Vera</h3>
            <div class="card-divider"></div>
            <p class="card-text text-center">Lorem</p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('imgs/artesano2.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title text-center">Muñeco de nieve</h3>
            <div class="card-divider"></div>
            <p class="card-text text-center">Lorem</p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('imgs/artesano3.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title text-center">Conejito</h3>
            <div class="card-divider"></div>
            <p class="card-text text-center">Lorem</p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('imgs/artesano4.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title text-center">Las caracolas - terrarios</h3>
            <div class="card-divider"></div>
            <p class="card-text text-center">Lorem</p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('imgs/artesano5.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title text-center">Correa de café</h3>
            <div class="card-divider"></div>
            <p class="card-text text-center">Adina</p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('imgs/artesano6.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title text-center">Libreta tejida</h3>
            <div class="card-divider"></div>
            <p class="card-text text-center">Lorem</p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('imgs/artesano7.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title text-center">Tortuga</h3>
            <div class="card-divider"></div>
            <p class="card-text text-center">Lorem</p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('imgs/artesano8.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title text-center">Aretes</h3>
            <div class="card-divider"></div>
            <p class="card-text text-center">Lucy mar accesorios</p>
        </div>
    </div>
</div>
@endsection