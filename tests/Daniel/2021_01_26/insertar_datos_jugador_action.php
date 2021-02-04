<?php
//https://www.hostinger.es/tutoriales/conectar-php-mysql/
session_start();
$servername = "localhost";
$database = "nba2";
$username = "test";
$password = "test";

$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if((isset($_POST['nombre']) && $_POST['nombre'] != '')&&(isset($_POST['equipo_id']) && $_POST['equipo_id'] != '' )){
    unset($_SESSION['error_insertar_jugador']);

    $sql = "INSERT INTO `jugador` (`name`, `equipo_id`) VALUES ('".$_POST['nombre']."',".$_POST['equipo_id'].") ";
    
    $resultado = $conn->query($sql);
    if (!$resultado) {
        
        die("error al insertar");
    }
    mysqli_close($conn);

    header("Location:home.php");
}else{
    $_SESSION['error_insertar_jugador'] = "El nombre es requerido";
    mysqli_close($conn);
    
    header("Location:insertar_datos_jugador_form.php");
}