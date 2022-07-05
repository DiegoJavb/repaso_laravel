@extends('vistas.plantilla')
@section('title','Autores')
@section('contenido')
<h1>Bienvenido a la pagina de Autores</h1>
<ul>
    @foreach($authors as $autor)
    <li>{{$autor->nombre}}</li>
    @endforeach

</ul>

@endsection