<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style_jugador_create.css')}}">
    <title>Agregar Jugador</title>
</head>
<body>
@extends('layouts.app')
@include('menu.menu')
@include('header.jugador')
@section('content')
<div class="container">

<div class="panel panel-default"  id="form_jugador">
<div class="panel-heading"><p class="titulo_panel">Agregar Nuevo Jugador</p></div>
<div class="panel-body">

 <form action="{{route('save_jugador')}}"  method="post">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nombre del Jugador" name="nombre">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Apellido del Jugador" name="apellido">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Edad" name="edad">
        </div>
        
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Documento" name="documento">
        </div>

        <div class="form-group">
            <label for="">Seleccione  Nacionalidad</label>
            <select class="form-control" name="nacionalidad">
            @foreach($nacionalidad_jugador as $nacio)
            <option value="{{$nacio->id}}">{{$nacio->nacionalidad}}</option>
            @endforeach
            </select>

        </div>
            <input type="submit" value="Guardar" class="btn btn-primary">
            <a href="{{route('index')}}" class="btn btn-primary">Volver al Menu</a>
    </form>

</div>
</div> 
@include('error.error')
   
</div>
@endsection    
</body>
</html>