<?php
require '../clases/AutoCarga.php';
$imagen = Request::get("imagen");
$trozos = pathinfo($imagen);
$extension = $trozos["extension"];

if(mime_content_type($extension=="jpg" or $extension=="jpeg") ){
    header('Content-type: image/jpeg');
}elseif($extension=="gif"){
    header('Content-type: image/gif');
}

readfile("../../../carpeta/$imagen");