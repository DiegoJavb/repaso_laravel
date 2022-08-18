@extends('vistas.plantilla')
@section('title','Autores')
@section('encabezado')
<h1>Bienvenido a la pagina de Autores</h1>
@endsection
@section('contenido')
<ul>
    @foreach($authors as $autor)
    <li><strong>Nombre: </strong>{{$autor->nombre}}</li>
    <li><strong>Email: </strong>{{$autor->email}}</li>
    <br>
    @endforeach

</ul>
<a href="{{route('about.informacion')}}">Mas autores</a>
{{$authors->links()}}
@endsection