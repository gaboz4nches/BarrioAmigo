@extends("layouts.app")

@section('title', 'Editar noticia')

@section('content')

<hr class="hr-text" data-content="Editar noticia">
<div class="row justify-content-center">
	<div class="col-lg-7">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a class="white-text" href="{{ url('tidings') }}">Noticias</a>
			</li>
		    <li class="breadcrumb-item active">Editar noticia</li>
		</ol>
		<form action="{{url('tidings/'.$tdgs->id)}}" class="text-center" style="color: #757575;" method="post" enctype="multipart/form-data">
			@method('PUT')
			@csrf
			<div class="form-group">
				<input type="file" style="visibility: hidden;" accept="image/*" name="foto" required="">
				<button class="img btn-upload btn btn-outline-barrio btn-block" type="button"><i class="fa fa-upload"></i> Seleccionar Imagen...</button>
			</div>
			<div class="form-group">
				<input type="text" name="titulo" id="titulo" placeholder="Titulo de la noticia" class="form-control" value="{{ $tdgs->titulo }}" required="">
			</div>
			<div class="form-group">
				<label>Descripcion de la Noticia</label>
				<textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10">{{ $tdgs->descripcion }}</textarea>
			</div>
			<hr>
			<button class="btn btn-outline-success btn-block send" type="submit" value="save">Editar noticia <i class="fas fa-check"></i></button>
		</form>
	</div>
</div>

@endsection