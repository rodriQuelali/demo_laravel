@extends('layouts.header')

<<<<<<< HEAD
@section('title', 'Curso '.$curso->nombre)
=======
@section('title', 'Curso '.$curso)
>>>>>>> origin/main

@section('content')


{{-- <h1>show ...... <?php echo $curso?></h1> --}}
<h1>show .......... {{$curso}}</h1>

    
@endsection

