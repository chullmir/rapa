@extends('layouts.template')
@section('title','Completar')
@section('content')
<div class="calificar">
	<a href="{{route('evaluar')}}" id="boton-volver"><i class="fas fa-step-backward"></i> Volver</a>
	<h1>{{$users->name}} {{$users->lastname}}</h1>
	<h2>Categoría</h2>

	<form action="{{route('enviado')}}" method="get">
		@csrf
		<div class="form-group">
			<p class="pregunta">¿Lorem ipsum dolor sit amet, consectetur?</p>
			<p class="anterior">Anterior: <span class="resultado-anterior">4</span></p>
			<div class="opciones">
				<input type="radio" id="preg1-1" name="preg1" value="1">
				<label for="preg1-1">1</label>
				<input type="radio" id="preg1-2" name="preg1" value="2">
				<label for="preg1-2">2</label>
				<input type="radio" id="preg1-3" name="preg1" value="3">
				<label for="preg1-3">3</label>
				<input type="radio" id="preg1-4" name="preg1" value="4">
				<label for="preg1-4">4</label>
				<input type="radio" id="preg1-5" name="preg1" value="5">
				<label for="preg1-5">5</label>
			</div>	
		</div>

		<div class="form-group">
			<p class="pregunta">¿Lorem ipsum dolor sit amet, consectetur?</p>
			<p class="anterior">Anterior: <span class="resultado-anterior">4</span></p>
			<div class="opciones">
				<input type="radio" id="preg1-1" name="preg1" value="1">
				<label for="preg1-1">1</label>
				<input type="radio" id="preg1-2" name="preg1" value="2">
				<label for="preg1-2">2</label>
				<input type="radio" id="preg1-3" name="preg1" value="3">
				<label for="preg1-3">3</label>
				<input type="radio" id="preg1-4" name="preg1" value="4">
				<label for="preg1-4">4</label>
				<input type="radio" id="preg1-5" name="preg1" value="5">
				<label for="preg1-5">5</label>
			</div>	
		</div>

		<div class="form-group">
			<p class="pregunta">¿Lorem ipsum dolor sit amet, consectetur?</p>
			<p class="anterior">Anterior: <span class="resultado-anterior">4</span></p>
			<div class="opciones">
				<input type="radio" id="preg1-1" name="preg1" value="1">
				<label for="preg1-1">1</label>
				<input type="radio" id="preg1-2" name="preg1" value="2">
				<label for="preg1-2">2</label>
				<input type="radio" id="preg1-3" name="preg1" value="3">
				<label for="preg1-3">3</label>
				<input type="radio" id="preg1-4" name="preg1" value="4">
				<label for="preg1-4">4</label>
				<input type="radio" id="preg1-5" name="preg1" value="5">
				<label for="preg1-5">5</label>
			</div>	
		</div>

		<div class="form-group">
			<p class="pregunta">¿Lorem ipsum dolor sit amet, consectetur?</p>
			<p class="anterior">Anterior: <span class="resultado-anterior">4</span></p>
			<div class="opciones">
				<input type="radio" id="preg1-1" name="preg1" value="1">
				<label for="preg1-1">1</label>
				<input type="radio" id="preg1-2" name="preg1" value="2">
				<label for="preg1-2">2</label>
				<input type="radio" id="preg1-3" name="preg1" value="3">
				<label for="preg1-3">3</label>
				<input type="radio" id="preg1-4" name="preg1" value="4">
				<label for="preg1-4">4</label>
				<input type="radio" id="preg1-5" name="preg1" value="5">
				<label for="preg1-5">5</label>
			</div>	
		</div>

		<div class="form-group">
			<p class="pregunta">¿Lorem ipsum dolor sit amet, consectetur?</p>
			<p class="anterior">Anterior: <span class="resultado-anterior">4</span></p>
			<div class="opciones">
				<input type="radio" id="preg1-1" name="preg1" value="1">
				<label for="preg1-1">1</label>
				<input type="radio" id="preg1-2" name="preg1" value="2">
				<label for="preg1-2">2</label>
				<input type="radio" id="preg1-3" name="preg1" value="3">
				<label for="preg1-3">3</label>
				<input type="radio" id="preg1-4" name="preg1" value="4">
				<label for="preg1-4">4</label>
				<input type="radio" id="preg1-5" name="preg1" value="5">
				<label for="preg1-5">5</label>
			</div>	
		</div>

		<div class="form-group">
			<p class="pregunta">¿Lorem ipsum dolor sit amet, consectetur?</p>
			<p class="anterior">Anterior: <span class="resultado-anterior">4</span></p>
			<div class="opciones">
				<input type="radio" id="preg1-1" name="preg1" value="1">
				<label for="preg1-1">1</label>
				<input type="radio" id="preg1-2" name="preg1" value="2">
				<label for="preg1-2">2</label>
				<input type="radio" id="preg1-3" name="preg1" value="3">
				<label for="preg1-3">3</label>
				<input type="radio" id="preg1-4" name="preg1" value="4">
				<label for="preg1-4">4</label>
				<input type="radio" id="preg1-5" name="preg1" value="5">
				<label for="preg1-5">5</label>
			</div>	
		</div>

		<input type="submit" value="Enviar" class="submit">
		


		
	</form>
	
</div>



@endsection