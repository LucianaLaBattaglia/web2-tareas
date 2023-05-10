<?php


require_once './libs/Smarty.class.php';

class tareasview
{



function mostrar($titulo, $tareas){

    $smarty= new Smarty();
    $smarty-> assign('titulo', "Lista de tareas");
    $smarty->assign("tareas", $tareas);
    $smarty-> display ('templates/tareas.tpl');
    





}



}


?>