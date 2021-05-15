<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];
  $destino = 'oconnoragrimensura@outlook.com';
  $contenido = 'Nombre: ' . $name. '\nCorreo: '. $email . '\nAsunto: '. $subject. '\nMensaje: '. $message;
  mail($destino, 'Contacto', $contenido);
  header(location:index.html);
?>