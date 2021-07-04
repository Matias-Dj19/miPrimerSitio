<?php
require('class/rutas.php');
?>

<!--Estructura del DOM (Document Objects Models) -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mi Primera Pagina</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <!-- Aqui se ve todo el codigo por el usario -->
    <!-- cabecera del sitio y menu de navegacion -->
    <header>
        <h1>cabecera</h1>
        <!-- navegador central de la pagina web -->
        <?php include('partials/menu.php'); ?>
        <!-- fin navegador -->
    </header>
    <!-- cuerpo central de la pagina web -->
    <section>
        <h1>Nuestra empresa</h1>
        <article>
        <!-- lado derecho de la pagina -->
            <article class="derecho">
                <img src="img/img_empresa.jpeg" alt="imagen empresa" style="width: 96%; margin-right:4%">   
        </article>
        <article>
        <!-- lado izquierdo de la pagina -->
            <article class="izquierdo">
                <div class="texto">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto consequatur rem natus autem deleniti sequi.
                 Optio cupiditate ipsa maiores eaque ea quas eos illum eligendi quisquam? Aspernatur nam rem officiis?</p>
                 <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, eos corrupti? Non, incidunt rerum tempore 
                 doloremque cupiditate accusantium sint? Maiores debitis incidunt expedita enim excepturi consequatur perferendis rem ullam tempore!</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi vitae temporibus eum fugit quo numquam? Quos, qui voluptates! Vel 
                  veniam amet tempora? Rerum, eveniet delectus! Dolores porro explicabo optio veritatis.</p>
                </div>

                 <div>
                <iframe width="640" height="538" src="https://www.youtube.com/embed/Q7rJPuq4nuI" title="YouTube video player"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>"></iframe>
                 </div>
        </article>
    </section>
    <!-- pie de pagina de mi sitio -->
    <footer>
        <?php include('partials/footer.php'); ?>
    </footer>
</body>
</html>