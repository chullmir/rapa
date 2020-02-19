@extends('layouts.template')
@section('title','Resultados')
@section('content')
<div class="resultados">
	<h1>Resultados</h1>
	<table class="listado-resultados">
	<tr>
		<th>Nombre</th>
		<th>Sector</th>
		<th>Calificación</th>
		<th>Ver</th>
	</tr>
	<?php for ($i=0; $i < 10; $i++) { 
		echo '<tr>
				<td>Nombre Apellido</td>
				<td>Administración y Finanzas</td>
				<td>4.0</td>
				<td><a href="/resultados/'.$i.'"><i class="fas fa-eye"></i></i></a></td>
			</tr>';
	}
	?>
</table>


</div>


@endsection