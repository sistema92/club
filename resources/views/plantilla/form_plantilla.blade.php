<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Agregar Entrenador</title>
</head>
<body>
<div class="container">
    <div class="jumbotron">
    <form action="{{route('save_planilla')}}"  method="post">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Posicion del Jugador" name="posicion">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Dorsal" name="dorsal">
        </div>
         
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Entrenador" name="entrenador">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Jugador" name="jugador">
        </div>


            <input type="submit" value="Guardar" class="btn btn-primary">

    </form>

    </div>
</div>


    
</body>
</html>