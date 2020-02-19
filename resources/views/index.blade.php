@extends('layouts.template')
@section('title','Bienvenido')
@section('content')
<div class="menu">
	<a href="{{route('evaluar')}}">Completar</a>
	<a href="">Resultados</a>
</div>
@endsection