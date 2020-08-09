<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Entrenador</title>
    <link rel="stylesheet" href="{{asset('css/style_index_entrenador.css')}}">

</head>
<body>
@extends('layouts.app')
@include('menu.menu')
@include('header.entrenador')
@section('content')
<div class="container">


      <table class="table table-light" id="table">
        <thead class="thead-light">
            <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Documento</th>
            <th>Nacionalidad</th>
            <th></th>
            <th></th>
            </tr>
    
        </thead>
        <tbody>
            @foreach($entrenador as $datos)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$datos->nombre}}</td>
                <td>{{$datos->apellido}}</td>
                <td>{{$datos->edad}}</td>
                <td>{{$datos->documento}}</td>
                <td>{{$datos->nacionalidad}}</td>
                <td><a href="{{route('edit_entrenador',['id'=>$datos->id])}}" class="btn btn-primary">Editar</a></td>
                
                
                <td>
                    <form method="POST" action="{{route('destroy_entrenador',['id'=>$datos->id])}}">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" onclick="return confirm('Borrar');" class="btn btn-danger">Eliminar</button>   
                    </form>
                </td>
            </tr>
    
            @endforeach
        </tbody>
    </table>
    <a href="{{route('create_entrenador')}}" class="btn btn-primary">Agregar Nuevo Entrenador</a>
    <a href="{{route('index')}}" class="btn btn-primary">Volver al Menu</a>




</div>
@endsection
</body>
</html>