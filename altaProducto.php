<?php
session_start();
require_once 'conexion.php';

$nombre = $_POST['nombre'];
$stock = $_POST['stock'];
$precio = $_POST['precio'];
$img = $_FILES['imagen'];

// Preparar insercion
$stmt = $mysqli->prepare("INSERT INTO PRODUCTOS(nombre, stock, precio, idUsuario) VALUES (?, ?, ?, ?)") or die($mysqli->error);;
$stmt->bind_param(
    "sidi",
    $nombre, $stock, $precio, $_SESSION['usuario']['id']
) or die($mysqli->error);
$stmt->execute() or die($mysqli->error);

$id = $stmt->insert_id;

$bytes = addslashes(file_get_contents($img['tmp_name']));

// Preparar insercion
$query = $mysqli->query("INSERT INTO IMAGENES(img, idProducto) VALUES ('" . $bytes . "', " . $id . ")") or die($mysqli->error);

header("Location: empresa.php");