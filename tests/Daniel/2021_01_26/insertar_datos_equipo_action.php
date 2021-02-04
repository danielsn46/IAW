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

if(isset($_POST['nombre']) && $_POST['nombre'] != ''){
    unset($_SESSION['error_insertar_equipo']);

    $sql = "INSERT INTO `equipo` (`name`) VALUES ('".$_POST['nombre']."')";
    
    $resultado = $conn->query($sql);
    if (!$resultado) {
        die("error al insertar");
    }
    mysqli_close($conn);

    header("Location:home.php");
}else{
    $_SESSION['error_insertar_equipo'] = "El nombre es requerido";
    mysqli_close($conn);
    
    header("Location:insertar_datos_equipo_form.php");
}