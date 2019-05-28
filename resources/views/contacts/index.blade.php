@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

<hr class="hr-text" data-content="Contactanos">
@if (Auth::check() && Auth::user()->role == "admin")
	<a href="{{ url('contacts/create') }}" class="btn hvr-shutter-out-horizontal"><i class="fas fa-plus"></i> Nuevo Contacto</a>
@endif
<div class="row justify-content-center">
	@foreach($cnts as $cnt)
		<div class="card contacto" style="width: 18rem;">
			<img src="{{ $cnt->foto }}" class="card-img-top">
			<div class="card-body" style="background-color: #fff">
			    <h4 class="card-title text-center">{{ $cnt->nombre }}</h4>
			</div>
			<ul class="list-group list-group-flush text-center">
				<li class="list-group-item"><strong>Cargo:</strong><br> {{ $cnt->cargo }}</li>
				<li class="list-group-item"><strong>Correo:</strong><br> {{ $cnt->correo }}</li>
				<li class="list-group-item"><strong>Número de contacto:</strong> {{ $cnt->numero }}</li>
				@if (Auth::check() && Auth::user()->role == "admin")
					<li class="list-group-item">
						<a href="{{ url('contacts/'.$cnt->id.'/edit') }}" class="btn btn-success btn-block"><i class="fas fa-pencil-alt"></i> Editar</a>
						<form action="{{ url('contacts/'.$cnt->id) }}" method="post" >
	            			@method('delete')
	                		@csrf
	            			<a href="" class="btn btn-delete btn-block btn-danger" type="button"><i class="fas fa-trash"></i> Borrar</a>
	        			</form>
					</li>
				@endif
			</ul>
		</div>
	@endforeach
	<iframe class="embed-responsive embed-responsive-16by9" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.218457783478!2d-75.52203618573638!3d5.068308739772737!2m3!1f0!2f0!3f0!3m2!1i1024!3i768!4f13.1!3m3!1m2!1s0x8e476ffbbba5b139%3A0xaf0dc2c1895e37fd!2sCra.+21+%2318-54%2C+Manizales%2C+Caldas!5e0!3m2!1ses-419!2sco!4v1555653642146!5m2!1ses-419!2sco" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

@endsection