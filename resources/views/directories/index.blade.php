@extends('layouts.app')

@section('title', 'Directorio')

@section('content')

<hr class="hr-text" data-content="Directorio">
@if (Auth::check() && Auth::user()->role == "admin")
	<a class="btn btn-barrio" href="{{ url('directories/create') }}"><i class="fas fa-plus"></i> Añadir nuevo directorio</a>
	<a class="btn btn-barrio" href="{{ url('products/create') }}"><i class="fas fa-plus"></i> Añadir nuevo producto</a>
@endif
<br><br>
<div class="row justify-content-center">
	@foreach( $drts as $drt)
	<div class="col-md-5">
		<img class="img-direct" src="{{ asset( $drt->foto ) }}" alt="" width="100%">
		<br>
		<a class="btn btn-direct" href="{{ url('directories/'.$drt->id) }}">Ver los productos de este artesano</a>
		@if (Auth::check() && Auth::user()->role == "admin")
			<a href="{{ url('directories/'.$drt->id.'/edit') }}" class="btn btn-success text-capitalize"><i class="fas fa-pencil-alt"></i> Editar</a>
    		<form action="{{ url('directories/'.$drt->id) }}" method="post" style="display: inline-block">
        	    @method('delete')
            	@csrf
            	<a href="" class="btn btn-delete btn-danger text-capitalize" type="button"><i class="fas fa-trash"></i> Borrar</a>
        	</form>
    	@endif
	</div>
	@endforeach

@endsection