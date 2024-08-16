
@extends('layouts.header')

@section('title', 'Curso')

@section('content')

<h1>Editar Curso</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<<<<<<< HEAD
    <form action="{{ route('curso.update', $curso->id) }}" method="POST">
=======
    <form action="{{ route('cursos.update', $curso->id) }}" method="POST">
>>>>>>> origin/main
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $curso->nombre }}">
        </div>
        <div>
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion">{{ $curso->descripcion }}</textarea>
        </div>
        <div>
            <label for="duracion">Duración (en horas):</label>
            <input type="number" name="duracion" id="duracion" value="{{ $curso->duracion }}">
        </div>
        <div>
            <button type="submit">Actualizar</button>
        </div>
    </form>

    @endsection
