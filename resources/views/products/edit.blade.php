@extends("layouts.app")

@section('title', 'Editar producto')

@section('content')

<hr class="hr-text" data-content="Editar directorio">
<div class="row justify-content-center">
	<div class="col-lg-7">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a class="white-text" href="{{ url('directories') }}">Directorios</a>
			</li>
		    <li class="breadcrumb-item active">Editar producto</li>
		</ol>
		<form action="{{url('products/'.$prds->id)}}" class="text-center" style="color: #757575;" method="post" enctype="multipart/form-data">
			@method('PUT')
			@csrf
			<div class="form-group">
				<input type="file" style="visibility: hidden;" accept="image/*" name="foto" required="">
				<button class="img btn-upload btn btn-outline-barrio btn-block" type="button"><i class="fa fa-upload"></i> Seleccionar Imagen...</button>
			</div>
			<div class="form-group">
				<input type="text" name="nombre" id="nombre" placeholder="Nombre del producto" class="form-control" value="{{ $prds->nombre }}" required="">
			</div>
			<div class="form-group">
				<select name="directory_id" class="form-control">
					<option value="">Seleccione Un Artesano...</option>
					@foreach ($drts as $drt)
                        <option value="{{ $drt->id }}" {{ $prds->directory_id == $drt->id ? 'selected' : '' }}>{{ $drt->nombre }}</option>
					@endforeach
				</select>
			</div>
			<hr>
			<button class="btn btn-outline-success btn-block send" type="submit" value="save">Editar directorio <i class="fas fa-check"></i></button>
		</form>
	</div>
</div>

@endsection