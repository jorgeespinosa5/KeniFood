<?php
session_start();
$total = 0;
require_once 'conexion.php';
// crear pedido
$total = $mysqli->query("SELECT SUM(p.precio * c.cantidad) AS totalProducto FROM productos p JOIN usuarios u on u.idUsuario = p.idUsuario JOIN carritos c on p.idProducto = c.idProducto WHERE u.idUsuario = " . $_SESSION['usuario']['id'] . "") or die($mysqli->error);
$total = $total->fetch_assoc();
$pedido = $mysqli->query("INSERT INTO PEDIDOS(idUsuario, total) VALUE(" . $_SESSION['usuario']['id'] . ", " . $total['totalProducto'] . ")") or die($mysqli->error);;
$pedidoID = $mysqli->insert_id;

$result = $mysqli->query("SELECT c.idProducto AS 'idProducto' FROM productos p JOIN usuarios u on u.idUsuario = p.idUsuario JOIN carritos c on p.idProducto = c.idProducto WHERE u.idUsuario = " . $_SESSION['usuario']['id'] . " AND c.cantidad > 0") or die($mysqli->error);
while ($row = $result->fetch_assoc()):
    $pedido = $mysqli->query("INSERT INTO PEDIDOS_LISTA(idPedido, idProducto) VALUE(" . $pedidoID . ", " . $row['idProducto'] . ")") or die($mysqli->error);;
endwhile;

// limpiar carrito
$total = $mysqli->query("DELETE FROM carritos WHERE idUsuario = " . $_SESSION['usuario']['id'] . "");

/* liberar memoria */
$result->free();

header("Location: index.php");