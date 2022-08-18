<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" />
@extends('vistas.plantilla')
@section('title', 'login')
@section('encabezado')
<h1>Ingresa tus datos para continuar</h1>
@section('contenido')
<form action="{{ route('login.store') }}" method="POST">
    @csrf
    <label for="name" id="nombre">Nombre:</label><br>
    <input type="text" name="name" id="name" value="{{ old('name') }}"><br><br>
    <label for="email" id="email">Email</label><br>
    <input type="email" name="email" id="email" value="{{ old('email') }}"><br><br>
    <label for="password" id="password">Password</label><br>
    <input type="password" name="password" id="password"><br><br>
    <label for="comment" id="comment">Comentario</label><br>
    <textarea name="comment" id="comment" cols="30" rows="10"></textarea><br>
    <input type="submit" value="Ingresar">
    @endsection