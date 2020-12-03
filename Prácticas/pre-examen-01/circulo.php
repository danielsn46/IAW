<?php
/**
 * Escriba un programa que cada vez que se ejecute
 * muestre un círculo de 50px de radio y de un color elegido al azar.
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Círculo de color.
    Variables. Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Círculo de color</h1>

  <p>Actualice la página para mostrar un nuevo círculo.</p>

<?php
  $color =array('white', 'yellow', 'green', 'red', 'brown', 'black', 'blue', 'pink');
  $aleatorio=rand(0,7);
  $r = rand(0,255);
  $g = rand(0,255);
  $b = rand(0,255);
  echo "<b  style='height:100px;
            width:100px;
            background-color:".$color[$aleatorio].";
            display:inline-block;
            border-radius:50px;'>
        </b>";
echo "<br>";
  echo "<b  style='height:100px;
        width:100px;
        background-color:rgb(".$r.",".$g.",".$b.");
        display:inline-block;
        border-radius:50px;'>
      </b>";
      

  


?>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
