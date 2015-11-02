<?php 
require '../clases/AutoCarga.php';
$sesion = new Session();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../estilos.css">
        <meta charset="utf-8">
        <title>PODCAST</title>
    </head>
    <body>
        <?php 
            if(!$sesion->isLogged()){
        ?>
        <div id="cont">
            <form name="login" action="phplogin.php" method="POST">
                <input type="text" name="user" value="" placeholder="Usuario"/>
                <input type="password" name="password" value="" placeholder="Password"/>
                <input type="submit" value="Login" name="login"/>
            </form>
        </div>
        <?php 
            } else{
        ?>  
                <a href="phplogout.php" class="logout">LOGOUT</a>
                <?php 
                    }
                ?>
    </body>
</html>
