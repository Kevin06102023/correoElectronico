<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    // Dirección de correo a la que se enviará el mensaje
    $destinatario = "kevin.jaramillo0505@gmail.com";

    // Asunto del correo
    $asunto = "Nuevo mensaje de contacto de $nombre";

    // Cuerpo del correo
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Correo electrónico: $email\n";
    $cuerpo .= "Mensaje:\n$mensaje";

    // Encabezados del correo
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "Mensaje enviado con éxito. Gracias por contactarnos.";
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>