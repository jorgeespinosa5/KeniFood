<?php
require_once 'conexion.php';
$correo = $_POST['correo'];
$contra = $_POST['contra'];

$result = $mysqli->query("SELECT * FROM USUARIOS WHERE BINARY correo = '" . $correo . "' AND BINARY password = '" . $contra . "' LIMIT 1");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $usuario = array(
            'id' => $row['idUsuario'],
            'correo' => $row['correo'],
            'nombre' => $row['nombre'],
            'direccion' => $row['direccion'],
            'rol' => $row['idRoles']
        );

        session_start();
        $_SESSION['usuario'] = $usuario;

        // Revisar que tipo de usuario es para redireccionar
        if ($row['idRoles'] == 1) {
            header("Location: index.php");
        } else if ($row['idRoles'] == 2) {
            header("Location: repartidor.php");
        } else if ($row['idRoles'] == 3) {
            header("Location: empresa.php");
        } else if ($row['idRoles'] == 4) {
            header("Location: administrador.php");
        }
    }
}