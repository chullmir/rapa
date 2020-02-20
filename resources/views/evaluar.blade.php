@extends('layouts.template')
@section('title','Completar')
@section('content')
<div class="evaluar">
	<h1>Completar</h1>
	<table class="listado-evaluados">
		<tr>
			<th>Nombre</th>
			<th>Sector</th>
			<th>Último</th>
			<th>Completar</th>
		</tr>
		@foreach($users as $user)
		<tr>
			<td>{{$user->name}} {{$user->lastname}}</td>
			<td>{{$user->sector_evaluado}}</td>
			<td>3.1</td>
			<td><a href="/evaluar/{{$user->id}}"><i class="fas fa-edit"></i></a></td>
		</tr>
		@endforeach
	</table>
	{{$users->links()}}
</div>

@endsection