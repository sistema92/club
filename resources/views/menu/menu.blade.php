<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/style_index.css')}}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  
    <nav class="navbar navbar-default" id="menu">
    <ul class="nav navbar-nav">
    <li>
    <a href="{{route('index_jugador')}}"><img src="{{asset('images/icons/soccer.png')}}">Jugador</a>
    </li>
    <li>
    <a href="{{route('index_entrenador')}}"> <img src="{{asset('images/icons/entrenador.png')}}">Entrenador</a>
    </li>
    <li>
    <a href="{{route('create_plantilla')}}" ><img src="{{asset('images/icons/planilla.png')}}">Plantilla</a>
    </li>
    <li>
    <a href="{{route('index_nacionalidad')}}"><img src="{{asset('images/icons/pito.png')}}">Nacionalidad</a>
    </li>
    </ul> 

     </nav>    
</body>
</html>