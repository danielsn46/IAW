<?php
/**
 * Descarta palo - descarta-palo-2.php
 *
 * @author Escriba aquí su nombre
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Descarta palo (Resultado).
    Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Descarta palo (Resultado)</h1>

<?php

$tirada =[];

for ($i = 0; $i <= $_POST['cantidad']; $i++){
  $num = rand(1,10);
  $carta = ['c', 'p', 'd', 't'];
  $cartanum = rand(0, 3);
  echo "<img src='img/".$carta[$cartanum].$num.".svg' height=200px>";
  if ($_POST['palo'] != $carta[$cartanum]){
    $buenas[] = $carta[$cartanum].$num;
  }

  $resultado[] = $carta[$cartanum].$num;

}
  echo "<br>";
  
  echo "<br>";
  
foreach ($buenas as $key => $value) {
  
  echo "<img src='img/".$value.".svg' height=200px>";
    
}

echo "<br><br>";
echo "Hay ".count($buenas)." cartas que no son del palo de: ".$_POST['palo'];

?>
  <p><a href="descarta-palo-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>

