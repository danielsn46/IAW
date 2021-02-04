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
$sql = "SELECT * FROM jugador ORDER by 'name asc'";
$resultado = $conn->query($sql);
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

<h1>Jugadores</h1>
<?php
if ($resultado) {
    
    echo "<ol>";
    while( $row = $resultado->fetch_array() )
    {
        echo"<li>".$row['name']."   Pertenece al equipo: ".$row['equipo_id']." <a href='eliminar_jugador.php?id=".$row['id']."'> Eliminar jugador</a></li>";
    }
    
    echo "<ol />";
    /* liberar el conjunto de resultados */
    $resultado->close();
}


mysqli_close($conn);
?>
</body>
</html>