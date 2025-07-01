<?php
$host = "localhost";
$usuario = "root";
$contrasena = "#J4c1nt0";
$bd = "EasyPiece"; // reemplaza por el nombre real de tu base de datos

// Crear conexión
$conn = new mysqli($host, $usuario, $contrasena, $bd);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión exitosa"; 
?>