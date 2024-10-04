<?php
if (mail($recipient, $subject, $email_content, $email_headers)) {
    echo "Gracias por tu mensaje. ¡Nos pondremos en contacto contigo pronto!";
} else {
    echo "Oops! Algo salió mal y no pudimos enviar tu mensaje.";
}
?>