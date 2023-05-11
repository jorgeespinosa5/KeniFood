<?php
require_once 'conexion.php';
session_start();
$producto = $_GET['idProducto'];
$origen = $_GET['url'];

$result = $mysqli->query("SELECT * FROM CARRITOS WHERE idUsuario = " . $_SESSION['usuario']['id'] . " AND idProducto = " . $producto . "");
if ($result->num_rows > 0) { // Hay producto, se suma
    while ($row = $result->fetch_assoc()) { // Obtengo el ID del carrito e incremento su contenido en uno
        $mysqli->query("UPDATE CARRITOS SET cantidad = cantidad + 1 WHERE idCarrito = " . $row['idCarrito']);
    }
} else { // No hay producto, se crea la relacion
    $mysqli->query("INSERT INTO CARRITOS(idUsuario, idProducto, cantidad) VALUE (" . $_SESSION['usuario']['id'] . ", " . $producto . ", 1)");
}

header("Location: " . $origen);