<?php
 $destino="dannita777xd@gmail.com";
 $nombre= $_post["Nombre"];
 $correo= $_post["Correo"];
 $telefono= $_post["Telefono"];
 $mensaje= $_post["Mensaje"];
 $contenido="Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
 mail($destino,"Contacto",$contenido);
 header("Location:index.html");

?>