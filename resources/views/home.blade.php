@extends('layouts.app')

@section('title', '¡Acceso denegado!')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            	<br>
                <hr class="hr-text-danger" data-content="Su perfil no tiene permisos requeridos">

                <div class="card-body text-center" style="color: #fff; background-color: red">
                    Por favor diríjase a la pestaña de inicio
                </div>
            </div>
        </div>
    </div>
</div>

@endsection