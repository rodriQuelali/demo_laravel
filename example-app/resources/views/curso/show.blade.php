@extends('layouts.header')

@section('title', 'Curso '.$curso)

@section('content')


{{-- <h1>show ...... <?php echo $curso?></h1> --}}
<h1>show .......... {{$curso}}</h1>
    
@endsection

