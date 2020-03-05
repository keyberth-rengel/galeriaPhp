<?php
require 'function.php';
$conexion = conexion('fotos', 'root', '');
 if (!$conexion) {
    die();
}
//conocer la pagina actual donde se encuentra el usuario

$pagina_actual = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
 $img_pagina = 4;

//variable que nos indicara desde donde empezara la recoleccion  de los datos 
$inicio = ($pagina_actual > 1) ? ($pagina_actual * $img_pagina - $img_pagina) : 0 ;

//consulta a la DBfotos
$consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $img_pagina");
$consulta->execute();

$resultado = $consulta->fetchAll();

//si no existe algun valor en la base de datos
if (!$resultado) {
     header('Location: index.php');
}
//calcular el numero de rows que contiene la DBfotos

$consulta = $conexion->prepare('SELECT FOUND_ROWS() AS total');
$consulta->execute();
$filas = $consulta->fetch()['total'];

$paginas_necesarias = ceil($filas / $img_pagina);


require 'views/index.view.php';
?>