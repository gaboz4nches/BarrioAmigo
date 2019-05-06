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
		
	</div>
</div>

@endsection