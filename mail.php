<?php
$nombre = $_GET['nombre'];
$mail = $_GET['mail'];
$mensaje = $_GET['mensaje'];


if(mail(ver mail , $nombre , $mensaje)){
    echo "Gracias por contactarse con nosotros" ;
}else {
    echo "No hemos podido recibir tu mensaje!, intentalo nuevamente";

}

?>