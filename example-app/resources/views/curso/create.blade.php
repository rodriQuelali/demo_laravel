
@extends('layouts.header')

@section('title', 'Curso')

@section('content')

<h1>create  sdfasdf</h1>
<div class="container">
    <h1>Crear Nuevo Curso</h1>
    <form action="{{ route('curso.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select name="estdo" id="estdo" class="form-control" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
    
@endsection
 
