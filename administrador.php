<!DOCTYPE html>
<html lang="en">
<head>

    <title> Administrador </title>
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

<!--Division de Categorias-->
<br><br>
<center><h1> Clientes </h1></center>
<?php
if ($result = $mysqli->query("SELECT idUsuario, nombre FROM USUARIOS WHERE idRoles = 1")) {
    while ($row = $result->fetch_assoc()):
        ?>
        <form action="borrarUsuario" method="get">
            <label for=""><?php echo $row['nombre'] ?></label>
            <button name="id" value="<?php echo $row['idUsuario'] ?>" type="submit">Borrar</button>
        </form>
    <?php
    endwhile;

    /* liberar memoria */
    $result->free();
}
?>


<center><h1> Repartidores </h1></center>
<a href="registrarse.php?tipoAlta=2">Agregar repartidor</a><br>

<?php
if ($result = $mysqli->query("SELECT idUsuario, nombre FROM USUARIOS WHERE idRoles = 2")) {
    while ($row = $result->fetch_assoc()):
        ?>
        <form action="borrarUsuario" method="get">
            <label for=""><?php echo $row['nombre'] ?></label>
            <button name="id" value="<?php echo $row['idUsuario'] ?>" type="submit">Borrar</button>
        </form>
    <?php
    endwhile;

    /* liberar memoria */
    $result->free();
}
?>

<center><h1> Empresas </h1></center>
<a href="registrarse.php?tipoAlta=3">Agregar empresa</a><br>

<?php
if ($result = $mysqli->query("SELECT idUsuario, nombre FROM USUARIOS WHERE idRoles = 3")) {
    while ($row = $result->fetch_assoc()):
        ?>
        <form action="borrarUsuario" method="get">
            <label for=""><?php echo $row['nombre'] ?></label>
            <button name="id" value="<?php echo $row['idUsuario'] ?>" type="submit">Borrar</button>
        </form>
    <?php
    endwhile;

    /* liberar memoria */
    $result->free();
}
?>


<center><h1>Administrador</h1></center>
<a href="registrarse.php?tipoAlta=4">Agregar administrador</a><br>

<?php
if ($result = $mysqli->query("SELECT idUsuario, nombre FROM USUARIOS WHERE idRoles = 4")) {
    while ($row = $result->fetch_assoc()):
        ?>
        <form action="borrarUsuario" method="get">
            <label for=""><?php echo $row['nombre'] ?></label>
            <button name="id" value="<?php echo $row['idUsuario'] ?>" type="submit">Borrar</button>
        </form>
    <?php
    endwhile;

    /* liberar memoria */
    $result->free();
}
?>

</body>
</html>