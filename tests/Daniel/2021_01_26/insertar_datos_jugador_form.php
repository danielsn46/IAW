<?php

  
  //https://www.hostinger.es/tutoriales/conectar-php-mysql/
  session_start();
  $servername = "localhost";
  $database = "nba2";
  $username = "test";
  $password = "test";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);
  
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
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
    <h1>INSERTAR DATOS JUGADOR</h1>
    <form action="insertar_datos_jugador_action.php" method="post">
        Nombre: 
        <input type="text" name="nombre" >
        Equipo ID:
        <input type="number" name="equipo_id" >
        <?php
            if(isset($_SESSION['error_insertar_jugador'])){
                echo "<p class='aviso'>".$_SESSION['error_insertar_jugador']."</p>";
            }
        ?>
        <input type="submit" name="enviar" value="Guardar datos">
    </form>
    <?php
    $sql = "select * from equipo order by id";
    $resultado2 = $conn->query($sql);
    
    if ($resultado2) {
        
      echo "<p><ul>";
      while( $row = $resultado2->fetch_array() )
      {
          echo"<li>".$row['id']."  Es el siguiente equipo: ".$row['name']."</li>";
      }
      
      echo "<ul /></p>";
      /* liberar el conjunto de resultados */
      $resultado2->close();
    }
    ?>
  
</body>
</html>