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
            </div>
        </div>
    </div>
    <br>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="{{ asset('imgs/formacion1.jpg') }}" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                    	<br>
                        <h2 class="text-center">
                            <a class="link-barrio" href>Socialización de nuestro programa</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="{{ asset('imgs/formacion2.jpg') }}" alt="Carousel 2">
                    </div>
                    <div class="card-block p-t-2">
                    	<br>
                        <h2 class="text-center">
                            <a class="link-barrio" href>Nuevos artesanos</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="{{ asset('imgs/formacion3.jpg') }}" alt="Carousel 3">
                    </div>
                    <div class="card-block p-t-2">
                    	<br>
                        <h2 class="text-center">
                            <a class="link-barrio" href>Navidad Barrio Amigo.</a>
                        </h2>
                    </div>
                </div>
            </div>
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
            </div>
        </div>
    </div>
    <br>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="{{ asset('imgs/feria1.jpg') }}" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                    	<br>
                        <h2 class="text-center">
                            <a class="link-barrio" href>Feria artesanal teatro los fundadores</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="{{ asset('imgs/feria2.jpg') }}" alt="Carousel 2">
                    </div>
                    <div class="card-block p-t-2">
                    	<br>
                        <h2 class="text-center">
                            <a class="link-barrio" href>Feria artesanal teatro los fundadores</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="{{ asset('imgs/feria3.jpg') }}" alt="Carousel 3">
                    </div>
                    <div class="card-block p-t-2">
                    	<br>
                        <h2 class="text-center">
                            <a class="link-barrio" href>Feria artesanal resinto del pensamiento</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="{{ asset('imgs/feria4.jpeg') }}" alt="Carousel 4">
                    </div>
                    <div class="card-block p-t-2">
                    	<br>
                        <h2 class="text-center">
                            <a class="link-barrio" href>Feria artesanal teatro los fundadores</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="{{ asset('imgs/feria5.jpg') }}" alt="Carousel 5">
                    </div>
                    <div class="card-block p-t-2">
                    	<br>
                        <h2 class="text-center">
                            <a class="link-barrio" href>Feria artesanal torre de chipre</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 fadeIn wow">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="{{ asset('imgs/feria6.jpg') }}" alt="Carousel 6">
                    </div>
                    <div class="card-block p-t-2">
                    	<br>
                        <h2 class="text-center">
                            <a class="link-barrio" href>Feria artesanal pasaje cultural cafetero</a>
                        </h2>
                    </div>
                </div>
            </div>
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