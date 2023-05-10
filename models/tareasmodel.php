<?php



class tareasmodel
{


    function __construct()
    {
        
}


    function conectar(){

        return new PDO('mysql:host=localhost;'
        .'dbname=db_tareas;charset=utf8'
        , 'root', '');

    }

    function get_tareas(){

        $db=conectar();
        $sentencia = $db->prepare( "select * from tarea");

        $sentencia->execute();

        return $sentencia->fetchAll(PDO::FETCH_OBJ);

    }


    function insertartarea($titulo, $descripcion, $realizada){

        $db= conectar();
        $sentencia = $db->prepare("INSERT INTO tarea(nombre, descripcion, realizada) VALUES(?, ?, ?)");
        $sentencia->execute (array($titulo, $descripcion, $realizada));
    

    }



}

?>