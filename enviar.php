<?php
$destino = "info@demosconsulting.com.ar";
$nombre = $_POST["name"];
$tel = $_POST["tel"];
$correo = $_POST["email"];
$mensaje = $_POST["message"];
$contenido = "Nombre: " . $nombre . "\nTel.: " .$tel ."\nCorreo: " .$correo . "\nMensaje: " . $mensaje; mail($destino, "Contacto", $contenido);

// header("Location:gracias.html");
echo "<script> alert ('Correo enviado exitosamente')</script>";
echo "<script> setTimeout (\"location.href='index.html'\",1000)</script>";

?>
