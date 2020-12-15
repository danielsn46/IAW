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
  $dado1= rand (1,6);
  $dado2= rand (1,6);
  $dado3= rand (1,6);
  echo "<h1>Tirada de dados</h1>";
  echo "<p>";
    echo "<img src='img/".$dado1.".svg' alt=".$dado1." width='140' height='140'>";
    echo "<img src='img/".$dado2.".svg' alt=".$dado2." width='140' height='140'>";
    echo "<img src='img/".$dado3.".svg' alt=".$dado3." width='140' height='140'>";
  echo "</p>";
  $total=$dado1+$dado2+$dado3;

  echo "<p>Valor Total conseguido:".$total."</p>";
  echo "<p><a href='tirada-dados-1.php'>Volver a tirar</a></p>";


?>


<footer>
  <p>Daniel Sánchez García</p>
</footer>
</body>
</html>
