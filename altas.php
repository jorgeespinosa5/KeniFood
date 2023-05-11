<?php
if (isset($_GET['tipoAlta'])) {
    $tipoAlta = $_GET['tipoAlta'];
} else {
    $tipoAlta = 1; // Cliente
}

require_once 'conexion.php';

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contra = $_POST['contra'];
$direccion = $_POST['direccion'];

// Preparar insercion
$stmt = $mysqli->prepare("INSERT INTO USUARIOS(correo, password, nombre, direccion, idRoles) VALUES (?, ?, ?, ?, ?)") or die($mysqli->error);;
$stmt->bind_param(
    "ssssi",
    $correo, $contra, $nombre, $direccion, $tipoAlta
) or die($mysqli->error);
$stmt->execute() or die($mysqli->error);

// Obtener el rol para saber a donde mandarlo
if ($tipoAlta === 1) {
    // Crear sesion
    $usuario = array(
        'id' => $stmt->insert_id,
        'correo' => $correo,
        'nombre' => $nombre,
        'direccion' => $direccion,
        'rol' => $tipoAlta
    );

    session_start();
    $_SESSION['usuario'] = $usuario;
    header("Location: index.php");
} else {
    header('Location: administrador.php');
}