<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style_entrenador_create.css')}}">
    <title>Agregar Entrenador</title>
</head>
<body>
@extends('layouts.app')
@include('header.entrenador')
@include('menu.menu')

@section('content')
<div class="container">
<div class="panel panel-default" id="form_entrenador">
<div class="panel-heading"><p class="titulo-panel">Agregar Nuevo Entrenador</p></div>
<div class="panel-body">
    <form action="{{route('save_entrenador')}}"  method="post" >
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nombre del Entrenador" name="nombre">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Apellido del Entrenador" name="apellido">
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
            @foreach($nacionalidad_entrenador as $nacio)
            <option value="{{$nacio->id}}">{{$nacio->nacionalidad}}</option>
            @endforeach
            </select>

        </div>
            <input type="submit" value="Guardar" class="btn btn-primary">

    </form>

    
</div>
</div>
</div>

@endsection
    
</body>
</html>