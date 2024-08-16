@extends('layouts.header')

@section('title', 'Cursos')

@section('content')




<div class="container">
    <center><h1>CURSO</h1></center>
    <a href="{{ route('curso.create') }}"  class="btn btn-primary"> AGREGAR UN NUEVO CURSO</a>
    <hr>
    <h1>Listado de Cursos</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Estado</th>
                <th>ESTADO</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
                <tr>
                    <td scope="row">{{ $curso->id }}</td>
                    <td>{{ $curso->nombre }}</td>
                    <td>{{ $curso->estado ? 'Activo' : 'Inactivo' }}</td>

                    <td> <a href="{{ route('curso.show', $curso) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('curso.edit', $curso) }}">Editar</a>
                        <form action="{{ route('curso.delete', $curso) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection


