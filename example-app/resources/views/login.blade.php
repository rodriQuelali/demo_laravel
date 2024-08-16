@extends('layouts.header')

@section('title', 'Login')

@section('content')
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f8f9fa;
    }
    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }
    .card-img-top {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    .btn-primary {
        background-color: #007bff;
        border: none;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .form-check-label {
        margin-left: 0.3em;
    }
</style>

@if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

<div class="card p-4" style="width: 100%; max-width: 400px;">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Escudo_Instituto_Tecnologico_Bolivia_Mar_by_rithchard.jpg/405px-Escudo_Instituto_Tecnologico_Bolivia_Mar_by_rithchard.jpg" class="card-img-top" alt="Login Image" width="20" height="280">
    <div class="card-body">
        <h2 class="card-title text-center mb-4">Sistema de registro de Asistencia</h2>
        <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="form-group">
                <input type="email" name="email" class="form-control" id="email" placeholder="USUARIO.." required>
            </div>
            <div class="form-group mt-3">
                <input type="password" name="password" class="form-control" id="password" placeholder="CONTRASEÑA" required>
            </div>
            <div class="form-group form-check mt-3">
                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">RECORDAR CONTRASEÑA</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4">INGRESAR</button>
            @if (Route::has('password.request'))
                <a class="btn btn-link d-block text-center mt-2" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            @endif
        </form>
    </div>
</div>

@endsection()

