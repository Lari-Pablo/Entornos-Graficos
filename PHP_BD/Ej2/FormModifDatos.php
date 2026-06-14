<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificacion</title>
    </head>
    <body>
        <?php
        $link = mysqli_connect("localhost", "root", "root", "Capitales");
        $vID = $_POST['ID'];
        
        $vSql = "SELECT * FROM Ciudades WHERE id ='$vID' ";
        $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
        $fila = mysqli_fetch_array($vResultado);
        if(mysqli_num_rows($vResultado) == 0) {
            echo ("La ciudad no se encuentra cargada.<br>");
            echo ("<a href='FormModif.html'>Continuar</a>");
        }
        else{
            ?>
            <form action="Modif.php" method="POST" name="FormModifDatos">
                <table width="356">
                    <tr>
                        <td>ID:</td>
                        <td><input type="number" name="ID" value="
                        <?php
                        echo($fila['ID']); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="103">Ciudad:</td>
                        <td width="243"> <input type="text" name="Ciudad" value="
                        <?php
                        echo($fila['Ciudad']); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="103">País:</td>
                        <td width="243"> <input type="text" name="País" value="
                        <?php
                        echo($fila['Pais']); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="103">Habitantes: </td>
                        <td width="243"> <input type="TEXT" name="Habitantes" size="20" maxlength="20" value="
                        <?php
                        echo($fila['Habitantes']); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="103">Superficie: </td>
                        <td width="243"> <input type="TEXT" name="Superficie" size="20" maxlength="20" value="
                        <?php
                        echo($fila['Superficie']); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="103"> Ingrese 0 si la ciudad no tiene metro o 1 si lo tiene: </td>
                        <td width="243"> <input type="text" name="Metro" size="20" maxlength="1" pattern="[01]" required value="
                        <?php
                         echo($fila['Metro']); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"> <input type="SUBMIT" name="Submit" value="Modificar ciudad"></td>
                    </tr>
                </table>
            </form>
            <?php
        }
            
        mysqli_free_result($vResultado);
        mysqli_close($link);
        ?>
    </body>
</html>        