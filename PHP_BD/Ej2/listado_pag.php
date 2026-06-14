<html>
    <head>
        <meta charset="UTF-8">
        <title> Listados completo con PAGINACIÓN </title>
    </head>
    <body>
        <?php
        $link = mysqli_connect("localhost", "root", "root", "Capitales");
        $Cant_por_Pag = 2;
        $pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null ;
        if (!$pagina) {
            $inicio = 0;
            $pagina=1;
        }
        else {
            $inicio = ($pagina - 1) * $Cant_por_Pag;
        }

        $vSql = "SELECT * FROM ciudades";
        $vResultado = mysqli_query($link, $vSql);
        $total_registros=mysqli_num_rows($vResultado);
        $total_paginas = ceil($total_registros/ $Cant_por_Pag);
        echo "Numero de registros encontrados: " . $total_registros . "<br>";
        echo "Se muestran paginas de " . $Cant_por_Pag . " registros cada una<br>";
        echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<p>";
        $vSql = "SELECT * FROM ciudades"." limit " . $inicio . "," . $Cant_por_Pag;
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
        <?php
        if ($total_paginas > 1){
            for ($i=1;$i<=$total_paginas;$i++){
                if ($pagina == $i)
                    echo $pagina . " ";
                else
                    echo "<a href='Listado_pag.php?pagina=" . $i ."'>" . $i . "</a> ";}}?>
        <p>&nbsp;</p>
        <p align="center"><a href="Menu.html">Volver al Menú principal</a></p>
    </body>
</html>