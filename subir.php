<?php
require 'function.php';
$conexion = conexion('fotos', 'root', '');
$error = '';
    //comprovar en se envio por el metodo post y que la variable files no este vacia
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
    //comprobamos que sea una imagen
        $check = @getimagesize($_FILES['foto']['tmp_name']);

       if ($check !== false) {

          $carpeta = 'fotos/'; //carpeta dinde se va alojar la imagen luego de ser subida
          $ruta = $carpeta . $_FILES['foto']['name'];
          //colocarla en la carpeta luego de subirla
          move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);

          $consulta = $conexion->prepare("INSERT INTO fotos (titulo, imagen, descripcion) VALUES (:titulo, :img, :descripcion)");
          $consulta->execute(array(':titulo' => $_POST['titulo'], ':img' => $_FILES['foto']['name'], ':descripcion' => $_POST['descripcion']));
         header('Location: index.php');
        }else{
           $error .= 'El archivo seleccionado no es un imagen o es muy pesado.';
       }
    } 
require 'views/subir.view.php';
?>