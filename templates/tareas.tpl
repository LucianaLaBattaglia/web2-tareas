

{include file="header.tpl"}

<body>
<h1>{$titulo}</h1>
    <div class="container">
        <ul class="list-group">
        
            {foreach from=$tareas item=tarea}
            <li class="list-group-item">{$tarea->nombre}: {$tarea->descripcion}<a href="borrar/{$tarea->id_tarea}">Borrar</a></li>
            {/foreach}
       
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
