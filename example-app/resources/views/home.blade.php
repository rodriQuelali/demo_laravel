@extends('layouts.header')

@section('title', 'Home')

@section('content')

@if (Auth::check())
    <p>Bienvenido, {{ Auth::user()->name }}</p>
@else
    <p>No has iniciado sesión.</p>
@endif
<a href="{{route('logout')}}">Salir</a>

<h1>HOME PAGE</h1>
@endsection()

