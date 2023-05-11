<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="img/ꓘ.png"/>
    <title>ꓘeniFood</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/scroll.css">
</head>

<body>
<?php
require_once 'nav.php'
?>

<img src="img/26Techfix-illo-superJumbo.gif" alt="Funny image" width="500px" height="300px">
<br><br>

<!--Division de Categorias-->
<center>
    <h1> Productos</h1>
</center>
<div class="items">
    <?php
    require_once 'conexion.php';
    if ($result = $mysqli->query("SELECT idProducto, nombre, stock, precio FROM PRODUCTOS WHERE stock > 0")) {
        while ($row = $result->fetch_assoc()):
            $imgSQL = $mysqli->query("SELECT img FROM IMAGENES WHERE idProducto = '" . $row['idProducto'] . "'");
            $img = $imgSQL->fetch_assoc();
            $data = base64_encode($img['img']);
            ?>
            <a href="agregarProducto.php?idProducto=<?php echo $row['idProducto'] ?>&url=<?php echo $_SERVER['REQUEST_URI']; ?>">
                <div class="item">
                    <img src="data:image/jpeg;base64, <?php echo $data ?>" alt="" width="auto" height="100px"><br>
                </div>
            </a>
        <?php
        endwhile;

        /* liberar memoria */
        $result->free();
    }
    ?>
</div>

</body>