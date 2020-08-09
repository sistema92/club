<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="{{asset('css/style_jugador_create.css')}}">
    <title>Editar Jugador</title>
</head>
<body>
@extends('layouts.app')
@include('menu.menu')
@include('header.jugador')
@section('content')

<div class="container">
    
    <div class="panel panel-default" id="form_jugador">
    <div class="panel-heading"><p class="titulo_panel">Editar Jugador<p></div>
    <div class="panel-body">


    <form action="{{url('jugador/'.$datos->id)}}"  method="post" >
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nombre del Jugador" name="nombre"  value="{{$datos->nombre}}">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Apellido del Jugador" name="apellido" value="{{$datos->apellido}}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Edad" name="edad" value="{{$datos->edad}}">
        </div>
        
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Documento" name="documento" value="{{$datos->documento}}">
        </div>


            <input type="submit" value="Guardar" class="btn btn-primary">
            <a href="{{route('index_jugador')}}" class="btn btn-primary">Volver</a>
    </form>
</div>
</div>
@include('error.error')

@endsection

    
</body>
</html>