<html>
    <head>
        <title> Listados completo </title>
    </head>
    <body>
        <?php
        $link = mysqli_connect("localhost", "root", "root", "Capitales");
        $vSql = "SELECT * FROM Ciudades";
        $vResultado = mysqli_query($link, $vSql);
        $total_registros=mysqli_num_rows($vResultado);
        ?>
        <table border=1>
            <tr>
                <td><b>ID</b></td>
                <td><b>Ciudad</b></td>
                <td><b>Pais</b></td>
                <td><b>Habitantes</b></td>
                <td><b>Superficie</b></td>
                <td><b>tieneMetro</b></td>
            </tr>
            <?php
            while ($fila = mysqli_fetch_array($vResultado))
            {
            ?>
            <tr>
            <td><?php echo ($fila['ID']); ?></td>
            <td><?php echo ($fila['Ciudad']); ?></td>
            <td><?php echo ($fila['Pais']); ?></td>
            <td><?php echo ($fila['Habitantes']); ?></td>
            <td><?php echo ($fila['Superficie']); ?></td>
            <td><?php echo ($fila['Metro']); ?></td>
            </tr>
            <tr>
            <td colspan="5">
            <?php
            }
      
            mysqli_free_result($vResultado);
            mysqli_close($link);
            ?>
            </td>
            </tr>
        </table>
        <p>&nbsp;</p>
        <p align="center"><a href="menu_principal.html">Volver al Menú Principal</a></p>
</body>
</html>