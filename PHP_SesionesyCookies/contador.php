<?php
if(isset($_COOKIE["contador"])){
    $acum = $_COOKIE["contador"] + 1;
    setcookie("contador", $acum, time() + (60 * 60 * 24 * 30));
    echo "Has visitado esta página " . $acum . " veces.";
} 
else{
    $contador = 1;
    setcookie("contador", $contador, time() + (60 * 60 * 24 * 30));
    echo "Bienvenid@ a la página";
}
?>