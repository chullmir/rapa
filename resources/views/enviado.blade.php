@extends('layouts.template')
@section('title','Gracias')
@section('content')
<div class="enviado">
	<p>Voto enviado</p>
	<?php 
		//echo "<pre>";

		//echo "</pre>";

	?>
	<div class="botones">
		<a href="{{route('evaluar')}}">Votar otra persona</a>
		<a href="{{route('index')}}">Inicio</a>
	</div>
	
</div>


@endsection