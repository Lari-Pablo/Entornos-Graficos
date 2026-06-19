<?php

$conexion = mysqli_connect("localhost","root","");
mysqli_select_db($conexion,"prueba");

$buscar = $_POST["buscar"];

$sql = "SELECT * FROM buscador
        WHERE canciones LIKE '%$buscar%'";

$resultado = mysqli_query($conexion,$sql);

?>

<html>
<body>

<h2>Resultado de la búsqueda</h2>

<?php
if(mysqli_num_rows($resultado) > 0){

    while($fila = mysqli_fetch_assoc($resultado)){

        echo $fila["canciones"] . "<br>";

    }
}else{
    echo "No se encontraron canciones";
}
?>
<br />
<a href="buscador.php">Nueva búsqueda</a>
</body>
</html>