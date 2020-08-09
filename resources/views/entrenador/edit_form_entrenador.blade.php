<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{asset('css/style_entrenador_create.css')}}">
    <title>Editar Entrenador</title>
</head>
<body>
@extends('layouts.app')
@include('menu.menu')
@include('header.entrenador')
@section('content')
<div class="container">

    <div class="panel panel-default" id="form_edit_entrenador">
    <div class="panel-heading"><p id="titulo_panel">Editar Entrenador</p></div>
    <div class="panel-body">
    <form action="{{URL('entrenador/'.$datos->id)}}"  method="post" >
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nombre del Entrenador" name="nombre" value="{{$datos->nombre}}">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Apellido del Entrenador" name="apellido" value="{{$datos->apellido}}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Edad" name="edad" value="{{$datos->edad}}">
        </div>
        
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Documento" name="documento" value="{{$datos->documento}}">
        </div>

        <input type="submit" value="Guardar" class="btn btn-primary">
        <a href="{{route('index_entrenador')}}" class="btn btn-primary">Volver</a>

    </form>
</div>
</div>
    
</div>

@endsection
    
</body>
</html>