<?php


function conectar(){

    return new PDO('mysql:host=localhost;'
    .'dbname=db_tareas;charset=utf8'
    , 'root', '');

}



function get_tareas(){

    $db= conectar();
    $sentencia = $db->prepare( "select * from tarea");

    $sentencia->execute();

    return $sentencia->fetchAll(PDO::FETCH_OBJ);

}
function insert_tarea(){
    $titulo=$_POST["tituloform"];
    $descripcion=$_POST["descripcionform"];

    if(isset($_POST["realizadaform"])){
        $realizada=$_POST["realizadaform"];
    }else{
        $realizada=1;
    }

    $db= conectar();
    $sentencia = $db->prepare("INSERT INTO tarea(nombre, descripcion, realizada) VALUES(?, ?, ?)");
    $sentencia->execute (array($titulo, $descripcion, $realizada));
    header("Location: http://".$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));


}

function delet_tarea(){

    
}




?>