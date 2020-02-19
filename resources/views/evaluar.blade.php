@extends('layouts.template')
@section('title','Completar')
@section('content')
<h1>Completar</h1>
<table class="listado-evaluados">
	<tr>
		<th>Nombre</th>
		<th>Sector</th>
		<th>Último</th>
		<th>Completar</th>
	</tr>
	<?php for ($i=0; $i < 10; $i++) { 
		echo '<tr>
				<td>Nombre Apellido</td>
				<td>Administración y Finanzas</td>
				<td>4.0</td>
				<td><a href="/evaluar/11"><i class="fas fa-edit"></i></a></td>
			</tr>';
	}
	?>
</table>

@endsection