<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Subir Foto</h1>
        </div>
    </header>
    <div class="contenedor">
        <form class="formulario" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
           
            <label for="foto">Selecciona una imagen</label>
            <input type="file" id="foto" name="foto">

            <label for="titulo">titulo</label>
            <input type="text" id="titulo" name="titulo">
    
            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" id="descripcion" placeholder="Ingrese una Descripcion"></textarea>

            <?php if(!empty($error)): ?>
                <p class="error"> <?php echo $error; ?> </p>
            <?php endif; ?>
            <input class="submit" type="submit" value="subir foto">
    
    </form>
    </div>

    <footer>
        <p>Galeria creada por Keyberth Rengel</p>
    </footer>
   
</body>
</html>