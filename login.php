<?php
include "conexion.php";

// Obtener los datos del formulario
$correo = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Preparar consulta segura para evitar inyecciones SQL
$sql = "SELECT * FROM usuario WHERE usuario = ? AND contrasena = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $correo, $contrasena);
$stmt->execute();
$resultado = $stmt->get_result();

// Validar usuario
if ($resultado->num_rows === 1) {
    // Usuario válido
    $usuario = $resultado->fetch_assoc();
    echo "¡Bienvenido, " . $usuario['usuario'] . "!";
    // Aquí puedes redirigir o iniciar sesión con session_start()
    // header("Location: pagina_principal.php");
} else {
    echo "Correo o contraseña incorrectos.";
}

$conn->close();
?>