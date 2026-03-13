<?php

// Conexión a la base de datos MySQL
$conexion = mysqli_connect("localhost", "root", "", "citas_medicas");

// Recibir los datos enviados desde el formulario
$paciente = $_POST['paciente'];
$doctor = $_POST['doctor'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

// Crear la consulta SQL para insertar la cita
$sql = "INSERT INTO citas (paciente, doctor, fecha, hora)
VALUES ('$paciente', '$doctor', '$fecha', '$hora')";

// Ejecutar la consulta en la base de datos
mysqli_query($conexion, $sql);

// Mostrar mensaje de confirmación
echo "Cita guardada correctamente";

?>