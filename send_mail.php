<?php
// Verifica si el formulario ha sido enviado
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $number = strip_tags(trim($_POST["number"]));
    $message = trim($_POST["message"]);

    // Comprobar si los campos están vacíos
    if(empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Si hay algún error, redirigir a una página de error
        http_response_code(400);
        echo "Por favor completa todos los campos y usa un correo válido.";
        exit;
    }

    // Establecer los detalles del correo
    $recipient = "vitalvit2024@gmail.com"; // Cambia esto por tu correo
    $subject = "Nuevo mensaje de $name";
    
    // Contenido del correo
    $email_content = "Nombre: $name\n";
    $email_content .= "Correo: $email\n";
    $email_content .= "Teléfono: $number\n";
    $email_content .= "Mensaje:\n$message\n";

    // Encabezados del correo
    $email_headers = "From: $name <$email>";

    // Enviar el correo
    if(mail($recipient, $subject, $email_content, $email_headers)) {
        // Si el correo se envía correctamente
        http_response_code(200);
        echo "Gracias por tu mensaje. ¡Nos pondremos en contacto contigo pronto!";
    } else {
        // Si ocurre un error
        http_response_code(500);
        echo "Oops! Algo salió mal y no pudimos enviar tu mensaje.";
    }
} else {
    // Si el formulario no se envió correctamente
    http_response_code(403);
    echo "Hubo un problema con el envío, por favor intenta de nuevo.";
}
?>