<?php
/**
 * Sesiones (2) 01 - sesiones-2-01-2.php
 *
 * @author Escriba aquí su nombre
 *
 */


session_start();

 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Formulario en dos pasos (Formulario 2).
    Sesiones (2). Sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Formulario en dos pasos (Formulario 2)</h1>

  <form action="sesiones-2-01-4.php" method="post">
    <p>Escriba sus apellidos:</p>

<?php

if (isset($_SESSION['error_apellido'])){
print "<b>".$_SESSION['error_apellido']."</b>";

print "    <p><label>Apellidos: <input type=\"text\" name=\"apellidos\" size=\"30\" maxlength=\"30\"></label></p>\n";
print "\n";
}
?>
    <p>
      <input type="submit" value="Siguiente">
      <input type="reset" value="Borrar">
    </p>
  </form>
  <?php
$_SESSION['error_apellido']  = "";  
?>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
