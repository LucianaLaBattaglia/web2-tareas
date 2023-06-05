<?php



class tareasmodel
{
    private $db;

    function __construct()
    {
        $this->db= conectar();
}


    function conectar(){

        return new PDO('mysql:host=localhost;'
        .'dbname=db_tareas;charset=utf8'
        , 'root', '');

    }

    function get_tareas(){

      
        $sentencia = $this->db->prepare( "select * from tarea");

        $sentencia->execute();

        return $sentencia->fetchAll(PDO::FETCH_OBJ);

    }


    function insertartarea($titulo, $descripcion, $realizada){

      
        $sentencia = $this->db->prepare("INSERT INTO tarea(nombre, descripcion, realizada) VALUES(?, ?, ?)");
        $sentencia->execute (array($titulo, $descripcion, $realizada));
    

    }



}

?>