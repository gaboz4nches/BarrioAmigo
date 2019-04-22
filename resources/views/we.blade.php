@extends('layouts.app')

@section('title', 'Quienes somos')

@section('content')
<hr class="hr-text" data-content="Quienes somos">
<div class="mx-auto">
	<div class="card mb-3">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<img src="{{ asset('imgs/banner-quienessomos.jpg') }}" class="card-img">
			</div>
			<div class="col-md-6">
				<div class="card-body" style="background-color: #fff;">
					<p class="card-text text-justify"><strong style="color: #e31019;">BARRIO AMIGO</strong>  es un programa de la Secretaría de Desarrollo Social de la Alcaldía de Manizales, encargado de apoyar de manera integral a los artesanos y sus unidades empresariales, con el fin de que sean competitivas en el mercado y su labor se convierta en una alternativa de ingresos que mejoren su calidad de vida y la de sus familias.<br>En la actualidad el programa cuenta con más de 300 beneficiarios entre unidades empresariales y artesanos que elaboran productos en sectores como: alimentos, tejidos, confección, manualidades, bisutería y decoración del hogar.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-10 offset-1">
	<div class="row justify-content-center" style="background-color: #F9F9F9">
		<div class="col">
			<h1 class="text-center">MISIÓN</h1>
			<p class="text-center">Promover la actividad artesanal mediante programas integrales y sustentables que respeten, rescaten, conserven y fortalezcan su identidad cultural.</p>
		</div>
		<div class="col">
			<h1 class="text-center">VISIÓN</h1>
			<p class="text-center">Lograr el reconocimiento de las artesanías realizadas en Manizales, por sus diseños contemporáneos que conservan la identidad de los objetos tradicionales, así como la preservación y costumbres de la región, involucrando a nuevas generaciones en la producción.</p>
		</div>
	</div>
</div>
<br>
<div class="col-lg-12">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<h1>ÚNETE A BARRIO AMIGO</h1>
			<p class="text-justify">Queremos que los artesanos y unidades empresariales de Manizales sean cada vez más competitivos en sus productos y servicios para de esta manera garantizar mejores ingresos y con ello contribuir a mejorar la calidad de vida.<br>Barrio Amigo es para todos, si elaboras productos en madera, tejidos, manualidades, alimentos, accesorios, arte decorativo, bisutería, fibras naturales, marroquinería, metales reciclados, vidrio o pintura es la oportunidad de unirse a nuestro programa.</p>
		</div>
		<div class="col-md-4">
			<h1 class="text-uppercase">beneficios</h1>
			<ul>
				<li>Puntos de exhibición de productos.</li>
				<li>Capacitaciones en diferentes áreas.</li>
				<li>Asesorías en diseño y mejoramiento productivo.</li>
				<li>Participación en ferias, eventos y muestras artesanales</li>
			</ul>
		</div>
	</div>
</div>
@endsection