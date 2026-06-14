<html>
    <head>
        <title>Modificacion</title>
    </head>
    <body>
        <?php
        $link = mysqli_connect("localhost", "root", "root", "Capitales");
        
        $vID = $_POST['ID'];
        $vCiudad = $_POST['Ciudad'];
        $vPais = $_POST['Pais'];
        $vHabit= $_POST['Habitantes'];
        $vSup = $_POST['Superficie'];
        $vMetro = $_POST['Metro'];
        
        $vSql = "UPDATE ciudades set Ciudad='$vCiudad', Pais='$vPais', Habitantes='$vHabit', Superficie ='$vSup', Metro = '$vMetro'  where id='$vID'";
        mysqli_query($link,$vSql) or die (mysqli_error($link));
        echo("La ciudad fue Modificada<br>");
        echo("<a href= 'menu_principal.html'>Volver al Menú principal</a>");
    
        mysqli_close($link);
        ?>
    </body>
</html>