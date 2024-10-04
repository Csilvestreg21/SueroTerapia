<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar los datos del formulario
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $date = $_POST['date'] ?? '';
    $time = $_POST['time'] ?? '';
    $service = $_POST['appointmentfor'] ?? '';

    // Aquí puedes agregar la lógica para enviar un correo o guardar la información
    // Por ejemplo, utilizando mail() o conectando a una base de datos
    $to = "vitalvit2024@gmail.com"; // Cambia esto a tu correo electrónico
    $subject = "Nueva Cita Agendada";
    $message = "Nombre: $name\nEmail: $email\nFecha: $date\nHora: $time\nServicio: $service";
    $headers = "From: $email";
    echo "Cita agendada: $name, $email, $date, $time, $service"; // Mensaje de éxito
} else {
    echo "Método no permitido"; // Si no es un POST
}
?>
