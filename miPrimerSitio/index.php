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
        <!-- llamada a sito menu.php -->
        <?php include('partials/menu.php'); ?>
    </header>
    <!-- cuerpo central de la pagina web -->
    <section>
        <?php if(isset($_GET['m']) && $_GET['m'] == 'ok'): ?>
            <p class="alert-success">El rol se ha registrado correctamente</p>
            <?php endif; ?>

        <h1>Titulo de mi Primera Pagina</h1>
        <h4>este es un subtitulo</h4>
        contenido principal   
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit eaque consectetur quam nulla distinctio eos, enim,
         porro eum cupiditate quidem explicabo obcaecati quo magnam rerum sapiente dicta doloribus voluptatum repellendus.</p>
        <a href="#">Ver mas</a> 
    </section>
    <!-- pie de pagina de mi sitio -->
    <footer>
        <?php include('partials/footer.php'); ?>
    </footer>
   
</body>
</html>