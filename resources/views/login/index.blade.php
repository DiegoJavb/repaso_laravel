<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@extends('vistas.plantilla')
@section('title', 'login')
@section('encabezado')
<h1>Ingresa tus datos para continuar</h1>
@section('contenido')
<form action="{{ route('login') }}" method="POST">
    @csrf
    <label for="email">Email</label><br>
    <input type="email" name="email" id="email" value="{{ old('email') }}"><br><br>
    <label for="password">Password</label><br>
    <input type="password" name="password" id="password"><br><br>
    <input type="submit" value="Ingresar" style="background-color: blue;"><br>
    @endsection