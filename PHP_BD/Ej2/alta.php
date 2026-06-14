<html>
    <head>
        <title>Alta Ciudad</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        $link = mysqli_connect("localhost", "root", "root", "Capitales");
        $vCiudad = $_POST['Ciudad'];
        $vPais = $_POST['Pais'];
        $vHab = $_POST['Habitantes'];
        $vSup = $_POST['Superficie'];
        $vMetro = $_POST['Metro'];

        $vSql = "SELECT Count(id) as canti FROM ciudades WHERE ciudad='$vCiudad'";
        $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));
        $vCantCiudad = mysqli_fetch_assoc($vResultado);
        if ($vCantCiudad ['canti']!=0){
            echo ("La ciudad ya existe.<br>");
            }
        else {
        $vSql = "INSERT INTO ciudades (Ciudad, Pais, Habitantes, Superficie, Metro) values ('$vCiudad', '$vPais', '$vHab', '$vSup', '$vMetro')";
        mysqli_query($link, $vSql) or die (mysqli_error($link));

        echo("La ciudad se agregó correctamente.");
        }
        mysqli_free_result($vResultado);

        mysqli_close($link);
        ?>
        <a href='menu_principal.html'>Volver al menú principal</a>
        </body>
    </html>