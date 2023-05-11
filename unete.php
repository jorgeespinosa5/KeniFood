<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>ꓘeniFood</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/scroll.css">
    <link rel="stylesheet" href="css/formulario.css">
</head>
<body>
    <center><a href="index.html"><img src="img/Logo.png" width="150px" height="34px"></a></center>
        <header>
            <input type="checkbox" id="btn-menu"/>
            <label class="icon-menu"for="btn-menu"><img src="img/iconmenu.png" width="40px" height="40px"></label>
           <!--img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAMUlEQVRIie3SoREAIADDwJT9dy6KCUAAl1dVVQF9L2u07dHjJADj5KnuZEXaZ0V6wATQzQwKQvoBVgAAAABJRU5ErkJggg=="-->
            <nav class="menu">
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="Promociones.html">Promociones</a></li>
                    <li><a href="quedate.html">#QuedateEnCasa</a></li>
                    <li><a href="#">Atencion a Clientes</a></li>
                    <li><a href="unete.html">Unete a Nosotros</a></li>
                </ul>
            </nav>
    </header>
    <!-- <center><img src="img/iconfavor.png" width="150px" height="100px"></center>-->
    <form action="php/uneteprograma.php" method="post">
        <br>
        <center><p style="color: rgb(255, 123, 0);"><H2 class="h2">Unete a Nosotros !!!</H2></p></center>
        <br>      
            <br>
            <br>
            <input type="text" name="name" id="name" class="field" placeholder="Nombre del Negocio">
            <br>
            <br>
            <input type="text" name="correo" id="correo" class="field" placeholder="Correo Electronico">
            <br>
            <br>
            <input type="text" name="cel" id="cel" class="field" placeholder="Numero de Telefono">
            <br>
            <br>
            <input type="text" name="domicilio" id="domicilio" class="field" placeholder="Domicilio">
            <br>
            <br>
            <br>
            <br>
            <button type="submit" class="button_base b01_simple_rollover" value="Realizar Pedido" >Enviar Formulario</button>
            <br>
            <br>
            <br>
            <br>
            <button type="reset" class="button_base b01_simple_rollover">Cancelar</button>
        </form>
</body>
</html>