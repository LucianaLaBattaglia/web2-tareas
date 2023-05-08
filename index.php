<?php

include_once 'tarea.php';

function home(){

    $Titulo= 'Lista de tareas';



?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $Titulo ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1><?php echo $Titulo ?></h1>

    <div class="container">
        <ul class="list-group">
        <?php
            foreach(get_tareas() as $tarea){
            echo '<li class="list-group-item">'. $tarea->nombre. ': '.$tarea->descripcion.'</li>';
            
            }  
           ?>
        </ul>
    </div>



    <h2>FORMULARIO:</h2>
    <div class="container"></div>
        <form method="POST" action="agregar">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="tituloform" id="tituloform">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcionform"id="descripcionform">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="realizadaform" name="realizadaform">
                <label class="form-check-label" for="realizadaform">Realizada</label>
            </div>
            <button type="submit" class="btn btn-primary">Crear tarea</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

<?php
}

?>