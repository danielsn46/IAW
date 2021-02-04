<?php

  session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    DATABASE MENU
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
    <h1>INSERTAR DATOS POSICION</h1>
    <form action="insertar_datos_posicion_action.php" method="post">
        Nombre: 
        <input type="text" name="nombre" >
        <?php
            if(isset($_SESSION['error_insertar_posicion'])){
                echo "<p class='aviso'>".$_SESSION['error_insertar_posicion']."</p>";
            }
        ?>
        <input type="submit" name="enviar" value="Guardar datos">
    </form>
  
</body>
</html>