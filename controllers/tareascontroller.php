<?php

require_once './views/tareasview.php';
require_once './models/tareasmodel.php';


class tareascontroller
{

private $view;
private $model;
private $titulo;

function __construct(){

    $this->view= new tareasview();
    $this->model= new tareasmodel();
    $this->titulo= "Lista de tareas";
}

function home(){

    $tareas= $this->model->get_tareas();
    $this->view->mostrar($this->titulo, $tareas);
}
function insert_tarea(){
    $titulo=$_POST["tituloform"];
    $descripcion=$_POST["descripcionform"];

    if(isset($_POST["realizadaform"])){
        $realizada=$_POST["realizadaform"];
    }else{
        $realizada=1;
    }

    $this->model-> insertartarea($titulo, $descripcion, $realizada);
    header("Location: http://".$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));
}



}

?>