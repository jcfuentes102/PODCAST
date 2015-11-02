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
            </form>
            <form action="../clases/scan.php" method="post" enctype="multipart/form-data">
                <li><button name="boton2">Mostrar Canciones</button></li>
            </form>
            </ul>
            <a href="../login/phplogout.php">LOGOUT</a>
        </div>
    </body>
</html>
