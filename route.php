<?php
require_once 'index.php';
require_once 'tarea.php';

if($_GET['action']==""){
    home();
}else{
    if($_GET['action']=="agregar"){

        insert_tarea();

    }
}
?>