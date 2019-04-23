@extends("layouts.app")

@section('title', 'Editar contacto')

@section('content')

<hr class="hr-text" data-content="Editar contacto">
<div class="row justify-content-center">
	<div class="col-lg-7">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a class="white-text" href="{{ url('contacts') }}">Contactos</a>
			</li>
		    <li class="breadcrumb-item active">Editar contacto</li>
		</ol>
		<form action="{{url('contacts/'.$cnts->id)}}" class="text-center" style="color: #757575;" method="post" enctype="multipart/form-data">
			@method('PUT')
			@csrf
			<div class="form-group">
				<input type="file" style="visibility: hidden;" accept="image/*" name="foto" required="">
				<button class="img btn-upload btn btn-outline-barrio btn-block" type="button"><i class="fa fa-upload"></i> Seleccionar Imagen...</button>
			</div>
			<div class="form-group">
				<input type="text" name="nombre" id="nombre" placeholder="Nombre Completo" class="form-control" value="{{ $cnts->nombre }}" required="">
			</div>
			<div class="form-group">
				<input type="text" name="cargo" id="cargo" placeholder="Cargo" class="form-control" value="{{ $cnts->cargo }}" required="">
			</div>
			<div class="form-group">
				<input type="email" name="correo" id="correo" placeholder="Correo Electronico" class="form-control" value="{{ $cnts->correo }}" required="">
			</div>
			<div class="md-form">
		        <input type="number" name="numero" id="numero" placeholder="Número de telefono" class="form-control" value="{{ $cnts->numero }}" required="">
		    </div>
			<hr>
			<button class="btn btn-outline-success btn-block send" type="submit" value="save">Editar contacto <i class="fas fa-check"></i></button>
		</form>
	</div>
</div>

@endsection