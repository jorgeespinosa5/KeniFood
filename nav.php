<?php
session_start();
?>
<header>
    <input type="checkbox" id="btn-menu"/>
    <table>
        <tr>

            <td><label class="icon-menu" for="btn-menu"><img src="img/iconmenu.png" width="40px" height="40px">
            </td>

            <td width="350px" height="40px">
                <center><a href="index.php"><img src="img/Logo.png" width="150px" height="34px"></a></center>
            </td>

            <?php if (isset($_SESSION['usuario'])): ?>
                <td><label class="icon" for="btn"><a href="carrito.php"><img src="img/cRRO.png" width="40px"
                                                                             height="40px"></a></label></td>
            <?php else: ?>
                <td><label class="icon" for="btn"><a href="login.php"><img src="img/cRRO.png" width="40px"
                                                                           height="40px"></a></label></td>
            <?php endif; ?>


        </tr>
    </table>
    <nav class="menu">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="Promociones.php">Promociones</a></li>
            <li><a href="quedate.php">#QuedateEnCasa</a></li>
            <li><a href="#">Atencion a Clientes</a></li>
            <?php if (isset($_SESSION['usuario'])): ?>
                <li><a href="logout.php">Salir</a></li>
            <?php else: ?>
                <li><a href="login.php">Iniciar sesión</a></li>
            <?php endif; ?>

            <!-- Roles | Repartidor -->
            <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 2): ?>
                <li><a href="repartidor.php">Repartidor</a></li>
            <?php endif; ?>

            <!-- Roles | Empresa -->
            <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 3): ?>
                <li><a href="empresa.php">Empresa</a></li>
            <?php endif; ?>

            <!-- Roles | Administrador -->
            <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 4): ?>
                <li><a href="administrador.php">Administrador</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>