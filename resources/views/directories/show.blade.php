@extends("layouts.app")

@section('title', 'Ver más')

@section('content')

<hr class="hr-text" data-content="{{ $drts->titulo }}">
<div class="row justify-content-center">
	<div class="col-lg-8">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a class="white-text" href="{{ url('tidings') }}">Noticias</a>
			</li>
		    <li class="breadcrumb-item active">{{ $drts->titulo }}</li>
		</ol>
		<table class="table table-striped table-hover">
			<tbody>
				<tr>
					<th>FOTO:</th>
					<td><img src="{{ asset($drts->foto) }}" width="100%"></td>
				</tr>
				<tr>
					<th>DESCRIPCION:</th>
					<td>{{ $drts->descripcion }}</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

@endsection