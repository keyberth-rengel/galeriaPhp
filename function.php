<?php

function conexion($dbname, $usuario, $password){
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $password);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}


?>