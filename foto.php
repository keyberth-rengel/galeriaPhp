<?php

require 'function.php';
$conexion = conexion('fotos', 'root', '');
if (!$conexion) {
    die();
}

$id = (isset($_GET['id'])) ? (int)$_GET['id'] : false;
if (!$id) {
    header('Location: index.php');
}

$consulta = $conexion->prepare('SELECT * FROM fotos WHERE id = :id');
$consulta->execute(array(':id' => $id));
$foto = $consulta->fetch();
if(!$foto){
    header('Location: index.php');
}

require 'views/foto.view.php';
?>