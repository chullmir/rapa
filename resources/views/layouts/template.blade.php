<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>@yield('title')</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins|Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo asset('fontawesome/css/all.min.css')?>">
	<link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>">
</head>
<body>
	<header>
		<a href="{{route('index')}}" class="logo">Home</a>
		<a href="#"><i class="fas fa-user-circle"></i></a>
		
	</header>
	@yield('content')
</body>
</html>