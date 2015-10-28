<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../estilos.css">
        <meta charset="utf-8">
        <title>PODCAST</title>
    </head>
    <body> 
        <div id="cont">
        <form action="subirmusica.php" method="post" enctype="multipart/form-data">
            <input type="text" name="categoria" value="" placeholder="categoria"/>
            <input type="file" name="archivo" multiple/>
            <input type="submit" />
        </form>
        </div>
    </body>
</html>
