<!DOCTYPE html>
<head>
    <link rel="shortcut icon" href="img/ꓘ.png"/>
    <title>Sesión</title>
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
<br><br><br>
<?php
?>
<form action="altas.php? <?php echo isset($_GET['tipoAlta']) ? 'tipoAlta=' . $_GET['tipoAlta'] : ''; ?>" method="post">
    <br><br>
    <h1><label>Nombre:</label><input type="text" name="nombre" size="35"></h1>
    <br><br>
    <h1><label>Correo:</label><input type="text" name="correo"></h1>
    <br><br>
    <h1><label>Contraseña:</label><input type="text" name="contra"></h1>
    <br><br>
    <h1><label>Direccion:</label><input type="text" name="direccion"></h1>
    <br><br>
    <input type="submit" value="Registrar" name="enviar"/>
    <br><br>
</form>
</body>