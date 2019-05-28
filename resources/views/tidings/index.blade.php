@extends('layouts.app')

@section('title', 'Noticias')

@section('content')

<hr class="hr-text" data-content="Noticias">
@if (Auth::check() && Auth::user()->role == "admin")
    <a href="{{ url('tidings/create') }}" class="btn hvr-shutter-out-horizontal"><i class="fas fa-plus"></i> Nueva Noticia</a>
@endif
<div class="testimonials">
    @foreach($tdgs as $tdg)
    <div class="card">
        <div class="layer"></div>
        <div class="content">
            <div class="image">
                <img src="{{ $tdg->foto }}">
            </div>
        	<br>
            <div class="details">
                <h2>{{ $tdg->titulo }}</h2>
            </div>
            <p>
                <strong>Descripcion de la noticia:</strong><br>
                {{ $tdg->descripcion }}
            </p>
            <a href="{{ url('tidings/'.$tdg->id) }}" class="btn btn-block btn-outline-primary text-capitalize"><i class="fas fa-search"></i> Ver más</a>
            <br>
            <p>
                <strong>Fecha:</strong><br>
                <?php 
                    \Carbon\Carbon::setLocale(config('app.locale'));
                    $hoy = \Carbon\Carbon::now();
                    $fna = \Carbon\Carbon::parse($tdg->created_at);
                ?>
                {{ date('M d', strtotime($tdg->created_at)) }}
            </p>
            @if (Auth::check() && Auth::user()->role == "admin")
                <a href="{{ url('tidings/'.$tdg->id.'/edit') }}" class="btn btn-success text-capitalize"><i class="fas fa-pencil-alt"></i> Editar</a>
                <form action="{{ url('tidings/'.$tdg->id) }}" method="post" style="display: inline-block">
                    @method('delete')
                    @csrf
                    <a href="" class="btn btn-delete btn-danger text-capitalize" type="button"><i class="fas fa-trash"></i> Borrar</a>
                </form>
            @endif
        </div>
    </div>
    @endforeach
</div>

@endsection