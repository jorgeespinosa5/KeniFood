<!DOCTYPE php>
<html lang="en">

<head>

    <title>McDonald's</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/scroll.css">
</head>

<body>
<center><a href="index.php"><img src="img/Logo.png" width="150px" height="34px"></a></center>
<?php
require_once 'nav.php'
?>

<!--Division de Categorias-->
<br><br>
<form method="POST" action="altaProducto.php" enctype="multipart/form-data">
    <label for="">Nombre<input type="text" name="nombre" id="nombre"></label>
    <br>
    <label for="">Stock<input type="text" name="stock" id="stock"></label>
    <br>
    <label for="">Precio<input type="text" name="precio" id="precio"></label>
    <br>
    <label for="">Imagen<input type="file" name="imagen" id="imagen"></label>
    <br>
    <button type="submit">Enviar</button>
</form>


<center>
    <h1>PRODUCTOS</h1>
</center>
<?php
require_once 'conexion.php';
if ($result = $mysqli->query("SELECT idProducto, nombre, stock, precio FROM PRODUCTOS WHERE idUsuario = '" . $_SESSION['usuario']['id'] . "'")) {
    while ($row = $result->fetch_assoc()):
        $imgSQL = $mysqli->query("SELECT img FROM IMAGENES WHERE idProducto = '" . $row['idProducto'] . "'");
        $img = $imgSQL->fetch_assoc();
        $data = base64_encode($img['img']);
        ?>
        <form action="#" method="get">
            <img src="data:image/jpeg;base64, <?php echo $data ?>" alt="" width="auto" height="100px"><br>
            <label for=""><?php echo $row['nombre'] ?></label><br>
            <label for=""><?php echo $row['stock'] ?></label><br>
            <label for=""><?php echo $row['precio'] ?></label><br>
        </form>
    <?php
    endwhile;

    /* liberar memoria */
    $result->free();
}
?>
</body>
</html>