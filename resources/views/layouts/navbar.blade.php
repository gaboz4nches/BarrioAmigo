<div>
	<img class="logo" src="{{ asset('imgs/logo.jpg') }}">
</div>
<nav class="navbar navbar-expand-lg bg-barrio sticky-top">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>
  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav mr-auto mx-auto">
      		<li class="nav-item">
        		<a class="nav-link {{ Request::is("/") ? 'active' : '' }}" href="{{ url('/') }}"><i class="fas fa-home"></i> INCIO</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link {{ Request::is("we") ? 'active' : '' }}" href="{{ url('/we') }}"><i class="fas fa-users"></i> QUIENES SOMOS</a>
      		</li>
      		{{-- <li class="nav-item">
        		<a class="nav-link" href="#">PRODUCTOS DE NUESTROS ARTESANOS</a>
      		</li> --}}
      		<li class="nav-item">
        		<a class="nav-link {{ Request::is("events") ? 'active' : '' }}" href="{{ url('events') }}"><i class="fas fa-calendar-alt"></i> EVENTOS</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link {{ Request::is("tidings") ? 'active' : '' }}" href="{{ url('tidings') }}"><i class="fas fa-newspaper"></i> NOTICIAS</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link {{ Request::is("directories") ? 'active' : '' }}" href="{{ url('directories') }}"><i class="fas fa-address-book"></i> DIRECTORIO</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link {{ Request::is("contacts") ? 'active' : '' }}" href="{{ url('contacts') }}"><i class="fas fa-address-card"></i> CONTACTO</a>
      		</li>
    	</ul>
  	</div>
</nav>