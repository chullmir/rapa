@extends('layouts.template')
@section('title','Resultados')
@section('content')
<div class="resultados">
	<h1>Resultados</h1>
	<table class="listado-resultados">
		<tr>
			<th>Nombre</th>
			<th>Sector</th>
			<th>Ver</th>
		</tr>
		@foreach($users as $user)
		<tr>
			<td>{{$user->name}} {{$user->lastname}}</td>
			<td>{{$user->sector_evaluado}}</td>
			<td><a href="/resultados/{{$user->id}}"><i class="fas fa-eye"></i></a></td>
		</tr>
		@endforeach
	</table>
	{{$users->links()}}
</div>


@endsection