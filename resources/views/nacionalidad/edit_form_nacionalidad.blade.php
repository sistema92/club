<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="{{asset('css/style_nacionalidad_create.css')}}" rel="stylesheet">
    <title>Formulario Modificar Nacionalidad</title>
</head>
<body>
@extends('layouts.app')
@include('menu.menu')
@include('header.nacionalidad')
@section('content')
<div class="container">
    <div class="panel panel-default" id="form_edit_nacionalidad">
    <div class="panel-heading"><p id="titulo_panel">Modificar Nacionalidad</p></div>
    <div class="panel-body">
        <form action="{{url('nacionalidad/'.$datos->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        @include('error.error')
        <div class="form-group">
        <label for="nombre">Nacionalidad</label>
        <input type="text" class="form-control" name="nacionalidad" value="{{$datos->nacionalidad}}">
        </div>
        
        <input type="submit" class="btn btn-primary" value="Guardar">
        <a href="{{route('index_nacionalidad')}}" class="btn btn-primary">Volver</a>
        </form>
        </div>
        </div>
</div>
@endsection
</body>
</html>