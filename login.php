<!DOCTYPE php>
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
<form action="loginForm.php" method="post">
    <br><br>
    <h1><label>Correo:</label><input type="text" name="correo"></h1>
    <br><br>
    <h1><label>Contraseña:</label><input type="text" name="contra"></h1>
    <br><br>
    <input type="submit" value="Entrar" name="enviar"/>
    <a href="registrarse.php">Registrarse</a>
    <br><br>
</form>
</body>
</php>