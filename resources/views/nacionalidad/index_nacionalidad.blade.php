<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nacionalidad</title>
<link rel="stylesheet" href="{{asset('css/style_index_nacionalidad.css')}}">
</head>
<body>
    @extends('layouts.app')
    @include('menu.menu')
    @include('header.nacionalidad')
    @section('content')
    <div class="container">
    <table class="table table-light" id="table">
        <thead class="thead-light">
            <tr>
            <th>#</th>
            <th>Pais</th>
            <th></th>
            <th></th>
            </tr>
    
        </thead>
        <tbody>
            @foreach($naciona as $datos)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$datos->nacionalidad}}</td>
                <td><a href="{{route('edit_nacionalidad',['id'=>$datos->id])}}" class="btn btn-primary">Editar</a></td>
                
                
                <td>
                    <form method="POST" action="{{route('destroy_nacionalidad',['id'=>$datos->id])}}">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" onclick="return confirm('Borrar');" class="btn btn-danger">Eliminar</button>   
                    </form>
                </td>
            </tr>
    
            @endforeach
        </tbody>
    </table>
    <a href="{{route('create_nacionalidad')}}" class="btn btn-primary">Agregar Nueva Nacionalidad</a>
    <a href="{{route('index')}}" class="btn btn-primary">Volver al Menu</a>
    
    </div>
    


 @endsection   
</body>
</html>




