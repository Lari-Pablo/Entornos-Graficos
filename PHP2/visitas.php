<?php
session_start();
?>
<html>
<body>
<?php
echo "Has visitado " . ($_SESSION["contador"]) . " páginas";
?>
<br />
<a href="contador.php">Otra página</a>
</body>
</html>