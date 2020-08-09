<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/style_nacionalidad_create.css')}}">
    <title>Agregar Nacionalidad</title>
</head>
<body>
@extends('layouts.app')
@include('menu.menu')
@include('header.nacionalidad')

@section('content')
<div class="container">     
    <div class="panel panel-default" id="form_nacionalidad">
    <div class="panel-heading"><p id="titulo_panel">Agregar Nacionalidad</p></div>
    <div class="panel-body">
    <form action="{{route('save_nacionalidad')}}"  method="post" >
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nacionalidad" name="nacio">
        </div>
            <input type="submit" value="Guardar" class="btn btn-primary">
    </form>
</div>
</div>
    @include('error.error')  
</div>

@endsection    
</body>
</html>