@extends("layouts.app")

@section('title', 'Añadir nuevo producto')

@section('content')

<hr class="hr-text" data-content="Añadir nuevo producto">
<div class="row justify-content-center">
	<div class="col-lg-7">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a class="white-text" href="{{ url('directories') }}">Directorio</a>
			</li>
		    <li class="breadcrumb-item active">Añadir nuevo producto</li>
		</ol>
		<form action="{{url('products')}}" class="text-center" style="color: #757575;" method="post" enctype="multipart/form-data">
			{!! csrf_field() !!}
			<div class="form-group">
				<input type="file" style="visibility: hidden;" accept="image/*" name="foto" required="">
				<button class="img btn-upload btn btn-outline-barrio btn-block" type="button"><i class="fa fa-upload"></i> Seleccionar Imagen...</button>
			</div>
			<div class="form-group">
				<input type="text" name="nombre" id="nombre" placeholder="Nombre del producto" class="form-control" value="{{ old('file') }}" required="">
			</div>
			<div class="form-group">
				<select name="directory_id" class="form-control">
					<option value="">Seleccione Un Artesano...</option>
					@foreach ($drts as $drt)
						<option value="{{ $drt->id }}" {{ old('directory_id') == $drt->id ? 'selected' : '' }}>{{ $drt->nombre }}</option>
					@endforeach
				</select>
			</div>
			<hr>
			<button class="btn btn-outline-success btn-block send" type="submit" value="save">Añadir producto <i class="fas fa-check"></i></button>
		</form>
	</div>
</div>

@endsection