@extends('vistas.plantilla')
@section('title', 'Información')
@section('encabezado')
<h1>Buscas algun autor?</h1>
@section('contenido')
<ul>
    @foreach ($authors as $author)
    <li>{{ $author->nombre }}</li>
    <li>{{ $author->email }}</li>
    <br>
    @endforeach
</ul>
@endsection