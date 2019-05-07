@extends("layouts.app")

@section('title', 'Ver más')

@section('content')

<hr class="hr-text" data-content="{{ $drts->nombre }}">
<div class="row justify-content-center">
	<div class="col-lg-8">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a class="white-text" href="{{ url('directories') }}">Directorio</a>
			</li>
		    <li class="breadcrumb-item active">{{ $drts->nombre }}</li>
		</ol>
	</div>
	<div class="col-lg-10">
		<div class="card card-image" style="background-image: url( {{ asset( $drts->foto ) }} ); background-repeat: no-repeat; background-size: cover;">
			<div style="width: 100%; height: 100%; background-color: rgba( 255, 255, 255, .5);">
				<div class="text-center py-5 px-4">
					<div class="py-5">
  						<h2 class="card-title h2 my-4 py-2">Conoce mas sobre nuestro artesano {{ $drts->nombre }}</h2>
						<p class="mb-4 pb-2 px-md-5 mx-md-5">{{ $drts->descripcion }}</p>
  					</div>	
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-12">
		<div class="container-fluid">
			<br>
			<hr class="hr-text" data-content="Productos del artesano">
			<br>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner row w-100 mx-auto">
					@foreach($prds as $prd)
						@if ($drts->id == $prd->directory_id)
      						<div class="carousel-item col-md-4 active">
        						<div class="card">
        							<div class="card-img-top img-fluid" style="background: url({{ asset( $prd->foto ) }}); height: 400px; width: 100%; background-repeat: no-repeat; background-size: cover;"></div>
          							{{-- <img class="card-img-top img-fluid" src="{{ asset( $prd->foto ) }}" alt="Card image cap"> --}}
          							<div class="card-body">
            							<h1 class="card-title text-center" style="color: #b48360;">{{ $prd->nombre }}</h1>
          							</div>
        						</div>
      						</div>
  						@endif
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
    	</div>
	</div>
</div>

@endsection