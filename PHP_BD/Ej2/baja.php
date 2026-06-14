<html>
    <head>
        <meta charset="UTF-8">
        <title>Baja Ciudad</title>
    </head>
    <body>
        <?php
        $link = mysqli_connect("localhost", "root", "root", "Capitales");
        $vID = $_POST ['ID'];
        $vSql = "SELECT * FROM Ciudades WHERE id='$vID'";
        $vResultado = mysqli_query($link, $vSql);
        if(mysqli_num_rows($vResultado) == 0)
        {
        echo ("La ciudad ingresada no se encuentra cargada.<br>");
        echo ("<a href='FormBaja.html'>Continuar</a>");
        }
        else{
        $vSql= "DELETE FROM ciudades WHERE id = '$vID' ";
        mysqli_query($link, $vSql);
        echo("La ciudad fue eliminada correctamente.<br>");
        echo("<a href='menu_principal.html'>Volver al Menú principal</a>");
        }

        mysqli_free_result($vResultado);
        mysqli_close($link);
        ?>
    </body>
</html>