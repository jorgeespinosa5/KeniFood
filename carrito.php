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

<center>
    <h1> Carrito</h1>
</center>
<?php
$total = 0;
require_once 'conexion.php';

$result = $mysqli->query("SELECT p.nombre AS 'nombre', c.idProducto AS 'idProducto', p.precio AS 'precio', c.cantidad AS 'cantidad', (p.precio * c.cantidad) AS 'totalProducto' FROM productos p JOIN usuarios u on u.idUsuario = p.idUsuario JOIN carritos c on p.idProducto = c.idProducto WHERE c.idUsuario = " . $_SESSION['usuario']['id'] . " AND c.cantidad > 0") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
        $imgSQL = $mysqli->query("SELECT img FROM IMAGENES WHERE idProducto = '" . $row['idProducto'] . "'");
        $img = $imgSQL->fetch_assoc();
        $data = base64_encode($img['img']);
        ?>
        <img src="data:image/jpeg;base64, <?php echo $data ?>" alt="" width="auto" height="100px"><br>
        <label for="">Nombre <?php echo $row['nombre'] ?></label><br>
        <label for="">Precio <?php echo $row['precio'] ?></label><br>
        <label for="">Cantidad <?php echo $row['cantidad'] ?></label><br>
        <label for="">Subtotal <?php echo $row['totalProducto'] ?></label><br>
        <a href="agregarProducto.php?idProducto=<?php echo $row['idProducto'] ?>&url=<?php echo $_SERVER['REQUEST_URI']; ?>">
            <div class="item">
                <button style="margin: 5px">Agregar uno mas</button>
            </div>
        </a>
        <a href="quitarProducto.php?idProducto=<?php echo $row['idProducto'] ?>&url=<?php echo $_SERVER['REQUEST_URI']; ?>">
            <div class="item">
                <button style="margin: 5px">Restar uno menos</button>
            </div>
        </a>
        <?php
        $total = $total + $row['totalProducto'];
    endwhile;

    /* liberar memoria */
    $result->free();

?>
<br>
<?php
if ($total == 0):
    echo '<h1>Sin productos</h1>';
else:
    ?>
    <form action="crearPedido.php" method="post" style="text-align: center">
        <p><b>Total: <?php echo $total ?></b></p>
        <button type="submit" style="padding: 10px; margin: 10px">Pagar</button>
    </form>
<?php
endif;
?>

</body>