<?php
if(isset($_POST["titular"])){
    $titular = $_POST["titular"];
    setcookie("titular", $titular,  time() + (60 * 60 * 24 * 90));
    $_COOKIE["titular"] = $titular;
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Periódico</title>
</head>
<body>

<h1>Periódico online</h1>

<form action="periodico.php" method="post">
    <input type="radio" name="titular" value="politica"> Política
    <input type="radio" name="titular" value="economia"> Economía
    <input type="radio" name="titular" value="deportes"> Deportes
    <br />
    <input type="submit" value="Guardar">
</form>

<?php
if(!isset($_COOKIE["titular"])){
    echo "<h2>Noticia Política</h2>";
    echo "<p>---Alguna noticia de política---</p>";

    echo "<h2>Noticia Económica</h2>";
    echo "<p>---Alguna noticia de economía---</p>";

    echo "<h2>Noticia Deportiva</h2>";
    echo "<p>---Alguna noticia de deportes---</p>";
}
else{
    if($_COOKIE["titular"]){

        case "politica":
            echo "<h2>Noticia Política</h2>";
            echo "<p>---Alguna noticia de política---</p>";
            break;

        case "economia":
            echo "<h2>Noticia Económica</h2>";
            echo "<p>---Alguna noticia de economía---</p>";
            break;

        case "deportes":
            echo "<h2>Noticia Deportiva</h2>";
            echo "<p>---Alguna noticia de deportes---</p>";
            break;
    }
}
?>
<br />
<a href="borrar.php">Borrar Preferencia</a>
</body>
</html>