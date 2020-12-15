<?php
/**
 * Escriba un programa que cada vez que se ejecute muestre tres cuadrados contiguos con un lado entre 50 y 150 píxeles, al azar.
 *
 * Crea 3 dif con width, height y fondos distintos. Cambia el widht y el heigh con un random
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
    Tres cuadrados.
    Variables. Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Tres cuadrados</h1>

  <p>Actualice la página para mostrar tres nuevos cuadrados.</p>
  
<?php
  
  $pepe = array('0','1','2','3','4','5','6','7','8');
  $resultado="";
  

  for ($i=0; $i<6; $i++){
    $numero= rand(0,8);
    
    $resultado = $resultado.$pepe[$numero];
    
    

  }
  $resultado="#".$resultado;
  echo $resultado;die;
 
 
  for ($i = 0; $i<9; $i++){
    $r = rand(0,255);
    $g = rand(0,255);
    $b = rand(0,255);
    $lado = rand (50,150);
    echo  "<b  style='height:".$lado."px;
                width:".$lado."px;
                background-color:rgb(".$r.",".$g.",".$b.");
                display:inline-block;'>
        </b>";
    
  }
  
  

?>


  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
