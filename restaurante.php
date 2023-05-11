<!DOCTYPE php>
<php lang="en">
    <head>

        <title>Mandoz</title>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/scroll.css">
    </head>
    <body>
    <form>
        <header>
            <input type="checkbox" id="btn-menu"/>
            <table>
                <tr>

                    <td><label class="icon-menu" for="btn-menu"><img src="img/iconmenu.png" width="40px" height="40px">
                    </td>

                    <td width="350px" height="40px"></td>

                    <td><label class="right"><img src="img/cRRO.png" width="40px" height="40px"></label></td>

                </tr>
            </table>
            <!--img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAMUlEQVRIie3SoREAIADDwJT9dy6KCUAAl1dVVQF9L2u07dHjJADj5KnuZEXaZ0V6wATQzQwKQvoBVgAAAABJRU5ErkJggg=="-->
            <nav class="menu">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="Promociones.php">Promociones</a></li>
                    <li><a href="quedate.php">#QuedateEnCasa</a></li>
                    <li><a href="#">Atencion a Clientes</a></li>
                    <li><a href="#">Unete a Nosotros</a></li>
                </ul>
            </nav>
        </header>
        <center><h1>RESTAURANT</h1></center>
        <center><img src="img/restaurant.png" width="150px" height="150px"></center>

        <br>
        -- Plato fuerte --
        <br>
        Homelete <select name="hm01">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
        </select>
        <br>
        Sopa de verduras <select name="hm01">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
        </select>

        <br>
        <br>
        -- Bebidas --
        <br>
        Refresco de cola <select name="hm01">
            <option>Cantidad...</option>
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
        </select>
        <select name="tm01">
            <option>Tamaño...</option>
            <option>chica</option>
            <option>grande</option>
            <option>jumbo</option>
        </select>
        <br>
        <br>
        <input type="Submit" value="Realizar pedido">
        <input type="reset">
    </form>
    </body>
</php>