<?php
/**
 * Tirada dados - tirada-dados-1.php
 *
 * @author Escriba aquí su nombre
 */
session_start();
print "<!-- Ejercicio incompleto -->\n";

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tirada dados (Formulario).
    Con sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Tirada de dados</h1>
<?php

if (isset($_GET['reset'])){
  $_SESSION['tiradas'] = [];
}

$num1 = rand(1,6);
$num2 = rand(1,6);
$num3 = rand(1,6);
$total = $num1 + $num2 + $num3;
$_SESSION['tiradas'][] = $total;
echo "<img src='img/".$num1.".svg'>";
echo "<img src='img/".$num2.".svg'>";
echo "<img src='img/".$num3.".svg'>";
echo "<br>";


if (isset($_SESSION['tiradas'])){
  echo "<ol>";
  foreach ($_SESSION['tiradas'] as $key => $value) {
    if ($value > 8){
      echo "<li><b> El resultado de la tirada es: ".$value."</b></li>";
    } else {
      echo "<li> El resultado de la tirada es: ".$value."</li>";
    }
  }
  echo "</ol>";
}



echo "<br>";
echo "El resultado de la tirada es: ".$total;



?>
<br>
<br>
<a href="tirada-dados-1.php">Tirar de nuevo</a>
<br>
<a href="tirada-dados-1.php?reset=true">Reset</a>
<footer>
  <p>Escriba aquí su nombre</p>
</footer>
</body>
</html>
