<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Foto: <?php if (!empty($foto['titulo'])) {
                echo $foto['titulo'];
            }else{
                echo $foto['imagen'];
            } ?></h1>
        </div>
    </header>
    <div class="contenedor">
        <div class="foto">
            <img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
            <p class="texto"><?php echo $foto['descripcion']; ?></p>
            <a class="regresar" href="index.php"><i class="fa fa-long-arrow-alt-left"></i> Regresar </a>
        </div>
    </div>

    <footer>
        <p>Galeria creada por Keyberth Rengel</p>
    </footer>
   
</body>
</html>