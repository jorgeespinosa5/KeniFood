<!DOCTYPE php>
<html lang="en">
<head>

    <title>Repartidor</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/scroll.css">
</head>
<body>
<center><a href="index.php"><img src="img/Logo.png" width="150px" height="34px"></a></center>
<?php
require_once 'nav.php';
require_once 'conexion.php';
?>

<?php
$total = 0;
$contador = 0;
if ($result = $mysqli->query("SELECT p.idPedido AS 'idPedido', p.total AS 'total', pl.idProducto AS 'idProducto', u.nombre AS 'destinatario', u.direccion AS 'direccion' FROM pedidos p JOIN pedidos_lista pl on p.idPedido = pl.idPedido JOIN usuarios u on u.idUsuario = p.idUsuario")) {
    while ($row = $result->fetch_assoc()):
        $pedidosLista = $mysqli->query("SELECT p.idPedido AS 'contadorPedidios' FROM pedidos p JOIN pedidos_lista pl on p.idPedido = pl.idPedido WHERE p.idPedido = " . $row['idPedido'] . "");
        $pedidosLista->fetch_assoc();

        $imgSQL = $mysqli->query("SELECT img FROM IMAGENES WHERE idProducto = '" . $row['idProducto'] . "'");
        $img = $imgSQL->fetch_assoc();
        $data = base64_encode($img['img']);
        if ($contador == 0):
            ?>
            <br><br>
            <center><h1>Pedido <?php echo $row['idPedido'] ?></h1></center>
            <div class="items">
        <?php
        endif;
        ?>
        <div class="item">
            <img src="data:image/jpeg;base64, <?php echo $data ?>" alt="" width="auto"
                 height="100px">
        </div>
        <?php
        if ($contador == $pedidosLista->num_rows - 1):
            ?>
            <div class="item">Direccion: <?php echo $row['direccion'] ?>
                <br>Destinatario: <?php echo $row['destinatario'] ?>
                <br>Total: $ <?php echo $row['total'] ?>.
            </div>
            </div>
            <br>
            <?php
            $contador = 0;
        else:
            $contador++;
        endif;
    endwhile;

    /* liberar memoria */
    $result->free();
}
?>
</body>
</html>