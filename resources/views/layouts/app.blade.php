<!DOCTYPE html>
<html>
<head>
	<title>Medicossi</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
	<nav class="navbar navbar-toggleable-md navbar-config">
		@if(Auth::check() and Auth::user()->role == 'Administrador')
		<a class="navbar-brand pl-3" id="show" href="#"><i class="fas fa-bars"></i></a>
		@endif
			<ul class="navbar-nav nav">
				<div class="dropdown text-center">
					@if(Auth::check())
					<li class=""  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href="" class="font-navbar text-center">{{Auth::user()->name}}</a></li>
					  <div class="dropdown-menu p-1" aria-labelledby="dropdownMenu2">
					    <a href="#" class="btn-block btn-config-login btn">Editar perfil</a>
							<form action="{{route('logout')}}" method="POST">
								{{csrf_field()}}
								<button type="submit" name="button" class="btn-block btn-config-login btn">Cerrar sesión</button>
							</form>
					  </div>
					@endif
				</div>

				<li class="font-navbar"> Servicios profesionales para tu salud</li>
			</ul>
		<a href="{{route('home')}}" class="position-img-navbar"><img src="{{asset('img/Medicossi-Marca original-01.png')}}" alt="" class="img-navbar"></a>
	</nav>
  @include('notifications.alerts')
	@yield('content')

</body>
	<script src="https://use.fontawesome.com/7886bdfbdc.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script type="text/javascript" src="js/main.js"></script>
	@yield('scriptJS')
</html>
