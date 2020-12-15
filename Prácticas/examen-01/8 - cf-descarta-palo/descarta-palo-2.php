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
    Daniel Sánchez García
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Descarta palo (Resultado)</h1>

<?php


if ($_POST['cantidad'] == ""){
  echo "<b>Introduzca un número de cartas válido</b><br><br>";

}
if (($_POST['cantidad'] < 2) || ($_POST['cantidad'] > 12)){
  echo "<b>No está entre los valores permitidos</b><br><br>";

}
if ($_POST['palo'] == ""){
  echo "<b>Introduzca un palo válido</b>";

}
if  (($_POST['cantidad'] !=  "") && ($_POST['palo'] != "") && ($_POST['cantidad'] >=  2)&& ($_POST['cantidad'] <=  12)){
  $palo=['c','d','p','t'];
  $resultado = 0;
  $cartas=[];
  
  echo "<b>Has seleccionado ".$_POST['cantidad']." cartas</b><br><br>";

  for ($i=1; $i<=$_POST['cantidad'];$i++){
    $palo_aleatorio=rand(0,3);
    $numero=rand(1,10);
    echo "<img src='img/".$palo[$palo_aleatorio].$numero.".svg' alt=".$palo[$palo_aleatorio].$numero." width='140' height='140'>";
    
    if ($_POST['palo'] != $palo[$palo_aleatorio]){
      $resultado++;
      $cartas[$resultado]=$palo[$palo_aleatorio].$numero;

    }
  }
  
  echo "<br><br>";
  //var_dump($resultado);die;


  if ($resultado == 0){
    echo "<b>No hay cartas que no sean de ese palo</b>";
  } else {
    if ($_POST['palo'] == 'd'){
      echo "<b>Hay ".$resultado." cartas que no son rombos.</b><br><br>";
    } 
    if  ($_POST['palo'] == 'c'){
      echo "<b>Hay ".$resultado." cartas que no son corazones.</b><br><br>";
    } 
    if  ($_POST['palo'] == 'p'){
      echo "<b>Hay ".$resultado." cartas que no son picas.</b><br><br>";
    } 
    if ($_POST['palo'] == 't') {
      echo "<b>Hay ".$resultado." cartas que no son treboles.</b><br><br>";
    }
    for ($i = 1; $i <=$resultado; $i++){
    
      echo "<img src='img/".$cartas[$i].".svg' alt=".$cartas[$i]." width='140' height='140'>";
    }
  }
   
   
  
}

?>
  <p><a href="descarta-palo-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Daniel Sánchez García</p>
  </footer>
</body>
</html>

