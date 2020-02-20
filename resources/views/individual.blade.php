@extends('layouts.template')
@section('title','Resultado Individual')
@section('content')
<div class="resultado-individual">
	<a href="{{route('resultados')}}" id="boton-volver"><i class="fas fa-step-backward"></i> Volver</a>
	<h1>Nombre Apellido</h1>
	<h2>Categoría</h2>
	<table>
		<tr>
			<th>Pregunta</th>
			<th>Puntaje</th>
			<th>Anterior</th>
			<th>Promedio</th>
		</tr>
		<tr>
			<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, culpa?</td>
			<td>4.8</td>
			<td>3.9</td>
			<td>3.5</td>
		</tr>
		<tr>
			<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, enim.</td>
			<td>4.8</td>
			<td>3.9</td>
			<td>3.5</td>
		</tr>
		<tr>
			<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, accusamus.</td>
			<td>4.8</td>
			<td>3.9</td>
			<td>3.5</td>
		</tr>
		<tr>
			<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, mollitia.</td>
			<td>4.8</td>
			<td>3.9</td>
			<td>3.5</td>
		</tr>
		<tr>
			<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, laboriosam.</td>
			<td>4.8</td>
			<td>3.9</td>
			<td>3.5</td>
		</tr>
	</table>
	
</div>


@endsection