<?php
// Conexión a la base de datos
$servername = "localhost"; // Cambia esto por el servidor de tu base de datos
$username = "usuario"; // Cambia esto por tu nombre de usuario de la base de datos
$password = "contraseña"; // Cambia esto por tu contraseña de la base de datos
$database = "base"; // Cambia esto por el nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtiene los datos del formulario
$nombre_usuario = $_POST['nombre_usuario'];
$contraseña = $_POST['contraseña'];

// Inserta los datos en la tabla usuarios
$sql = "INSERT INTO usuarios (nombre_usuario, contraseña) VALUES ('$nombre_usuario', '$contraseña')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
