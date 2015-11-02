

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../estilos.css">
        <meta charset="utf-8">
        <title>PODCAST</title>
    </head>
    <body> 
        <div id="cont">
            <a href="../login/user.php">VOLVER</a>
            <a href="../login/phplogout.php" class="logout">LOGOUT</a>
            <?php
            
            $mostrar = array_diff(scandir("../sounds"), array('..', '.'));
            //$mostrar = scandir("../sounds");

            echo "<ul>";
            foreach ($mostrar as $key => $value) {
                //echo "<li><audio src=".'"../sounds/Sleep Away.mp3"'.". autoplay loop controls></audio></li>"; //funciona!
                echo $value;
                echo '<li><audio src="'.'../sounds/'. $value . '" loop controls></audio></li><br><br>';
            }
            echo "</ul>";
            ?>
        </div>
    </body>
</html>