<?php
/**
 * Tirada dados - tirada-dados-1.php
 *
 * @author Escriba aquí su nombre
 */

print "<!-- Ejercicio incompleto -->\n";

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tirada dados (Formulario).
    Con sesiones.
    Daniel Sánchez García
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  
<?php
  session_start();
  $dado1= rand (1,6);
  $dado2= rand (1,6);
  $dado3= rand (1,6);

  $_SESSION['dado1'] = $dado1;
  $_SESSION['dado2'] = $dado2;
  $_SESSION['dado3'] = $dado3;

  echo "<h1>Tirada de dados</h1>";
  echo "<p>";
    echo "<img src='img/".$dado1.".svg' alt=".$dado1." width='140' height='140'>";
    echo "<img src='img/".$dado2.".svg' alt=".$dado2." width='140' height='140'>";
    echo "<img src='img/".$dado3.".svg' alt=".$dado3." width='140' height='140'>";
  echo "</p>";
  $total=$dado1+$dado2+$dado3;
  $_SESSION['total'] = $total;

  echo "<p>Valor Total conseguido:".$total."</p>";
  echo "<p><a href='tirada-dados-1.php'>Volver a tirar</a></p>";


?>

  <p><a href="tirada-dados-2.php">Guardar tirada</a></p>
  <p><a href="tirada-dados-3.php">Guardar tirada en la página 3</a></p>
<footer>
  <p>Daniel Sánchez García</p>
</footer>
</body>
</html>
