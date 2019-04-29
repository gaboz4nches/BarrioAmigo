@extends('layouts.app')

@section('title', 'Directorio')

@section('content')

<hr class="hr-text" data-content="Directorio">
<a class="btn btn-barrio" href="{{ url('directories/create') }}"><i class="fas fa-plus"></i> Añadir nuevo directorio</a>
<br><br>
<div class="row justify-content-center">
	@foreach( $drts as $drt)
	<div class="col-md-5">
		<img class="img-direct" src="{{ asset( $drt->foto ) }}" alt="" width="100%">
		<br>
		<a class="btn btn-direct" href="{{ url('directories/'.$drt->id) }}">Ver los productos de este artesano</a>
	</div>
	@endforeach

@endsection