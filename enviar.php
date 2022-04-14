<?php
	$destino = "joseyahirleon11@gmail.com";
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$mensaje = $_POST["mensaje"];
	//concatenación
	$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono ."\nMensaje: " . $mensaje;}

	mail($destino, "Contacto", $contenido);

	header("location:gracias.html");

?>