<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('class/rolModel.php');

//creamos un objeto o instancia de la clase rolModel
$roles = new rolModel;

//disponibilizacion de todos los roles
$roles = $roles->getRoles();

/* echo '<pre>';
print_r($roles);exit;
echo '</pre>'; */


?>
<!--Estructura del DOM (Document Object Model)-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primera Página</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <!--Aqui se ve todo el codigo por el usuario-->
    <!-- cabecera del sitio y menu de navegacion -->
    <header>
        <h1>Cabecera</h1>
        <!-- llamada a sitio menu.php -->
        <?php include('partials/menu.php'); ?>
    </header>
    <!-- cuerpo central de la pagina web -->
    <section>
        <div class="formulario">
            <?php if(isset($_GET['m']) && $_GET['m'] == 'ok'): ?>
                <p class="alert-success">El rol se ha registrado correctamente</p>
            <?php endif; ?>
            <h1>Roles</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Rol</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($roles as $rol): ?>
                        <tr>
                            <td> <?php echo $rol['id']; ?> </td>
                            <td> <?php echo $rol['nombre'] ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section> 
    <!-- pie de pagina del sitio -->
    <footer>
        <?php include('partials/footer.php'); ?>
    </footer> 
    
</body>
</html>