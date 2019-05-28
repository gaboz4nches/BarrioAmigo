@extends('layouts.app')

@section('title', 'Eventos')

@section('content')

@push('style')
<style>
    @media (min-width: 768px) {

  .carousel-inner .active,
  .carousel-inner .active + .carousel-item,
  .carousel-inner .active + .carousel-item + .carousel-item {
    display: block;
  }

  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
    transition: none;
  }

  .carousel-inner .carousel-item-next,
  .carousel-inner .carousel-item-prev {
    position: relative;
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }

  .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item {
    position: absolute;
    top: 0;
    right: -33.3333%;
    z-index: -1;
    display: block;
    visibility: visible;
  }

  .active.carousel-item-left + .carousel-item-next.carousel-item-left,
  .carousel-item-next.carousel-item-left + .carousel-item,
  .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
  .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }

  .carousel-inner .carousel-item-prev.carousel-item-right {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    display: block;
    visibility: visible;
  }

  .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
  .carousel-item-prev.carousel-item-right + .carousel-item,
  .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
  .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
    visibility: visible;
    display: block;
    visibility: visible;
  }
</style>
@endpush

<hr class="hr-text" data-content="Formaciones">
@if (Auth::check() && Auth::user()->role == "admin")
    <a class="btn btn-barrio" href="{{ url('formations/create') }}"><i class="fas fa-plus"></i> Añadir nueva formacion</a>
@endif
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner row w-100 mx-auto">
        @foreach($fmts as $fmt)
            <div class="carousel-item col-md-4 active">
                <div class="card">
                    <div class="card-img-top img-fluid" style="background: url({{ asset( $fmt->foto ) }}); height: 400px; width: 100%; background-repeat: no-repeat; background-size: cover;"></div>
                    <div class="card-body">
                        <a class="card-title text-center" href="{{ url('products/'.$fmt->id) }}" style="color: #b48360;">{{ $fmt->titulo }}</a>
                        <br>
                        @if (Auth::check() && Auth::user()->role == "admin")
                            <a href="{{ url('products/'.$fmt->id.'/edit') }}" class="btn btn-success text-capitalize"><i class="fas fa-pencil-alt"></i> Editar</a>
                            <form action="{{ url('products/'.$fmt->id) }}" method="post" style="display: inline-block">
                                @method('delete')
                                @csrf
                                <a href="" class="btn btn-delete btn-danger text-capitalize" type="button"><i class="fas fa-trash"></i> Borrar</a>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>
<hr class="hr-text" data-content="Ferias">
@if (Auth::check() && Auth::user()->role == "admin")
    <a class="btn btn-barrio" href="{{ url('fairs/create') }}"><i class="fas fa-plus"></i> Añadir nueva feria</a>
@endif
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner row w-100 mx-auto">
        @foreach($fars as $far)
            <div class="carousel-item col-md-4 active">
                <div class="card">
                    <div class="card-img-top img-fluid" style="background: url({{ asset( $far->foto ) }}); height: 400px; width: 100%; background-repeat: no-repeat; background-size: cover;"></div>
                    <div class="card-body">
                        <a class="card-title text-center" href="{{ url('products/'.$far->id) }}" style="color: #b48360;">{{ $far->titulo }}</a>
                        <br>
                        <a href="{{ url('products/'.$far->id.'/edit') }}" class="btn btn-success text-capitalize"><i class="fas fa-pencil-alt"></i> Editar</a>
                        @if (Auth::check() && Auth::user()->role == "admin")
                            <form action="{{ url('products/'.$far->id) }}" method="post" style="display: inline-block">
                                @method('delete')
                                @csrf
                                <a href="" class="btn btn-delete btn-danger text-capitalize" type="button"><i class="fas fa-trash"></i> Borrar</a>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>
@endsection