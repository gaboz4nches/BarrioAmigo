@extends("layouts.app")

@section('title', 'Añadir nueva formación')

@section('content')

<hr class="hr-text" data-content="Añadir nueva formación">
<div class="row justify-content-center">
	<div class="col-lg-7">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a class="white-text" href="{{ url('events') }}">Eventos</a>
			</li>
		    <li class="breadcrumb-item active">Añadir formación</li>
		</ol>
		<form action="{{url('formations')}}" class="text-center" style="color: #757575;" method="post" enctype="multipart/form-data">
			{!! csrf_field() !!}
			<div class="form-group">
				<input type="file" style="visibility: hidden;" accept="image/*" name="foto" required="">
				<button class="img btn-upload btn btn-outline-barrio btn-block" type="button"><i class="fa fa-upload"></i> Seleccionar Imagen...</button>
			</div>
			<div class="form-group">
				<input type="text" name="titulo" id="titulo" placeholder="Nombre de la formación" class="form-control" value="{{ old('file') }}" required="">
			</div>
			<div class="form-group">
				<label>Descripcion de la Formación</label>
				<textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
			</div>
			<hr>
			<button class="btn btn-outline-success btn-block send" type="submit" value="save">Añadir contacto <i class="fas fa-check"></i></button>
		</form>
	</div>
</div>

@endsection