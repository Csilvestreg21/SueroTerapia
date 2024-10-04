<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $service = $_POST['appointmentfor'];

    $to = "vitalvit2024@gmail.com"; // Cambia esto a tu correo electrónico
    $subject = "Nueva Cita Agendada";
    $message = "Nombre: $name\nEmail: $email\nFecha: $date\nHora: $time\nServicio: $service";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Cita agendada y correo enviado.";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>
