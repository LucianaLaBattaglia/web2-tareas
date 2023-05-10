<?php



function conectar(){

    return new PDO('mysql:host=localhost;'
    .'dbname=db_tareas;charset=utf8'
    , 'root', '');

}

//
function delete_tarea($id_tarea){
$db=conectar();
$sentencia=$db->prepare("DELETE FROM tarea WHERE id_tarea=?");
$sentencia->execute(array($id_tarea));
header("Location: http://".$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));
}








?>