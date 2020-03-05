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
            <h1 class="titulo">Mi Galeria en PHP</h1>
        </div>
    </header>

    <section class="fotos">
        <div class="contenedor">

                <?php foreach($resultado as $foto):?>
                    <div class="thumb">
                        <a href="foto.php?id=<?php echo $foto['id']; ?>">
                            <img src="fotos/<?php echo $foto['imagen']; ?>">
                         </a>
                    </div>
                <?php endforeach;?>
            
            <div class="paginacion">
                    <?php if($pagina_actual > 1): ?>
                        <a href="index.php?pagina=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fa fa-long-arrow-alt-left"></i> Pagina anterior</a>
                    <?php endif; ?>

                    <?php if($paginas_necesarias != $pagina_actual): ?>
                        <a href="index.php?pagina=<?php echo $pagina_actual + 1; ?>" class="derecha">Pagina siguiente <i class="fa fa-long-arrow-alt-right"></i></a>
                    <?php endif; ?>
            </div> 
        </div>
        
    </section>

        <footer>
             <p>Galeria creada por Keyberth Rengel</p>
        </footer>
   
</body>
</html>