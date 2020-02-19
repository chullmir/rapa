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
	</table>
	
</div>


@endsection