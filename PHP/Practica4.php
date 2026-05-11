<?php
/* Ejercicio 1

<?php
function doble($i) {
 return $i*2;
}
$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;
echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);
if (is_int($d)) {
 $d += 4;
}
if (is_string($a)) {
 echo "Cadena: $a";
}
$d = $a ? ++$d : $d*3;
$f = doble($d++);
$g = $f += 10;
echo $a, $b, $c, $d, $f , $g;
?> 

variables y tipos:
$a - tipo: boolean
$b - tipo: string
$c - tipo: string 
$d - tipo: integer
$f - tipo: integer
$g - tipo: integer

Opreadores utilizados: *, =, +=, ?, :, ++

Funciones y parámetros:
doble($i)
gettype($var)
is_int($var) 
is_string($var)

Estructuras de control:
if (is_int($d)) {
 $d += 4;
}
if (is_string($a)) {
 echo "Cadena: $a";
}

Salida por pantalla: 
booleanstringstringinteger1xyzxyz184444

Ejercicio 2:
a) Si, los 3 códigos son equivalentes. Salida en pantalla: 12345678910

b) Si, los 4 códigos son equivalentes. Salida en pantalla: 12345678910

c) Si, ambos códigos son equivalentes.

Ejercicio 3:
a ) El código se utiliza para crear una tabla de 2 columnas y 3 filas. Esta tabla tiene un ancho de 90% y un borde visible.
Se utiliza PHP para armar una tabal en HTML usando bucles "for". Es un código que se puede usar para crear tablas de datos.

b) El código crea un formulario, asegurándose primero que no haya sido enviado antes. Si el formulario fue enviado, utiliza el campo de edad que se envío en el formulario para verificar y mostrar si el usuario es mayor o menor de edad.
Es un código que puede usarse para validar datos, encuestas, hacer un inicio de sesion o registro, etc.

Ejercicio 4:
Salida que produce el código:
El
 El clavel blanco
--------------------------
Justificación: el primer echo utiliza variables que no fueron declaradas todavía, entonces imprime cadenas vacías en su lugar.
Luego, en el segundo echo, se ha utilizado "include" previamente para incluir el archivo 'datos.php' el cual contiene a las variables declaradas. Por lo que imprime los valores de las variables ($color='blanco' y $flor='clavel'): " El clavel blanco".

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Ejercicio 1:
a) Si, ambos códigos son equivalentes. PHP busca el próximo índice numérico que no se ha utilizado. Al no haber índices numéricos utilizados hasta ahora, en este caso el índice que se utilizará será 0.

Ejercicio 2:
a) Salida en pantalla: bar1
b) Salida en pantalla: 5942
c) Salida en pantalla (no hay echo): 

Ejercicio 3:
a) Salida en pantalla: Has entrado en esta pagina a las [hora] horas, con [minutos] minutos y [segundos] segundos, del [día]/[mes]/[año]
Los valores varían dependiendo la fecha y hora del sistema, en mi caso por ejemplo: Has entrado en esta página a las 19 horas, con 32 minutos y 27 segundos, del 2/5/2026

b) Salida en pantalla: 5+6=11
