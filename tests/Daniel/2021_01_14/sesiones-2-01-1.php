<?php
/**
 * Sesiones (2) 01 - sesiones-2-01-1.php
 *
 * @author Escriba aquí su nombre
 *
 * 
 */
session_start();


?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Formulario en dos pasos (Formulario 1).
    Sesiones (2). Sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Formulario en dos pasos (Formulario 1)</h1>

  <form action="sesiones-2-01-2.php" method="post">
    <p>Escriba su nombre:</p>

<?php
if (isset($_SESSION['error'])){
 print "<b>".$_SESSION['error']."</b>";
}

print "    <p><label>Nombre: <input type=\"text\" name=\"nombre\" size=\"20\" maxlength=\"20\"></label></p>\n";
print "\n";

?>
    <p>
      <input type="submit" value="Siguiente">
      <input type="reset" value="Borrar">
    </p>
  </form>
<?php
$_SESSION['error']  = "";  
?>
  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
