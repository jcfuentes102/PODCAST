<?php
require '../clases/AutoCarga.php';
$sesion = new Session();

if(!$sesion->isLogged()){
    $sesion->sendRedirect("index.php");
    exit();
}
$user = $sesion->getUser();

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../estilos.css">
        <meta charset="utf-8">
        <title>PODCAST</title>
    </head>
    <body>
        <h1> Bienvenido: <?php echo $user->getNombre(); ?></h1>
        <div id="cont">
            <form action="../subir/index.php" method="post" enctype="multipart/form-data">
            <ul>
                <li><button name="boton1">Subir Canción</button></li>
                <li><button name="boton2">Mostrar Usuarios</button></li>
                <li><button name="boton3">Categorías</button></li>
                <li><button name="boton4">Lista de canciones por categoría</button></li>
            </ul>
            </form>
        </div>
    </body>
</html>
