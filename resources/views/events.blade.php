@extends('layouts.app')

@section('title', 'Eventos')

@section('content')

<hr class="hr-text" data-content="Formaciones">
<section class="carousel slide" data-ride="carousel" id="postsCarousel">
	<div class="container">
        <div class="row">
            <div class="col-xs-12 text-md-right lead">
                <a class="btn btn-barrio prev" href="#" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-barrio next" href="#" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
                <a class="btn btn-barrio" href="{{ url('formations/create') }}"><i class="fas fa-plus"></i> Añadir nueva formacion</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            @foreach( $fmts as $fmt )
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid" src="{{ $fmt->foto }}" alt="Carousel 1">
                        </div>
                        <div class="card-block p-t-2">
                	        <br>
                            <h2 class="text-center">
                                <a class="link-barrio" href="{{ url('formations/'.$fmt->id) }}">{{ $fmt->titulo }}</a><br>
                                <a href="{{ url('formations/'.$fmt->id.'/edit') }}" class="btn btn-success text-capitalize"><i class="fas fa-pencil-alt"></i> Editar</a>
                                <form action="{{ url('formations/'.$fmt->id) }}" method="post" style="display: inline-block">
                                    @method('delete')
                                    @csrf
                                    <a href="" class="btn btn-delete btn-danger text-capitalize" type="button"><i class="fas fa-trash"></i> Borrar</a>
                                </form>
                            </h2>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<hr class="hr-text" data-content="Ferias">
<section class="carousel slide" data-ride="carousel" id="postsCarousel">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-md-right lead">
                <a class="btn btn-barrio prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-barrio next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
                <a class="btn btn-barrio" href="{{ url('fairs/create') }}"><i class="fas fa-plus"></i> Añadir nueva feria</a>
            </div>
        </div>
    </div>
    <br>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            @foreach( $fars as $far)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="{{ $far->foto }}" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                    	<br>
                        <h2 class="text-center">
                            <a class="link-barrio" href="{{ url('fairs/'.$far->id) }}">{{ $far->titulo }}</a><br>
                            <a href="{{ url('fairs/'.$far->id.'/edit') }}" class="btn btn-success text-capitalize"><i class="fas fa-pencil-alt"></i> Editar</a>
                            <form action="{{ url('fairs/'.$far->id) }}" method="post" style="display: inline-block">
                                @method('delete')
                                @csrf
                                <a href="" class="btn btn-delete btn-danger text-capitalize" type="button"><i class="fas fa-trash"></i> Borrar</a>
                            </form>
                        </h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@push('scripts')

<script>
	jQuery(document).ready(function($) {
		(function($) {
			"use strict";
			$('.next').click(function(){ $('.carousel').carousel('next');return false; });
			$('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
		})(jQuery);
	});
</script>

@endpush

@endsection