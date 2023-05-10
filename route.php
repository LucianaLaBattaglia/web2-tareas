<?php

require_once 'tarea.php';
require_once 'controllers\tareascontroller.php';


$controller=new tareascontroller();
$parteURL= explode("/", $_GET['action']);

if($parteURL[0]==""){
    $controller->home();
}else{

    if($parteURL[0]=="agregar"){

      $controller->insert_tarea();
    }
    if($parteURL[0]=="borrar"){
        delete_tarea($parteURL[1]);

    }
}
?>