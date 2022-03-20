<?php
    $destino= "puntoyapartemuebles@gmail.com";
    $nombre= $_POST ["nombre completo"];
    $correo= $_POST ["correo"];
    $telefono= $_POST ["telefono"];
    $comentario= $_POST ["comentario"];
    $contenido = "Nombre" . $nombre "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nComemtario: " . $conttenido;
    mail($destino,"Contacto", $contenido);
    header("location:gracias.html"); 
?>