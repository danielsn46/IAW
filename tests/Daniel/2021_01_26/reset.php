<?php
session_start();
session_destroy();
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
$sql = "DROP DATABASE `nba2`;";
$resultado = $conn->query($sql);

if ($resultado) {
    $_SESSION['database_borrada'] = true;
}else{
    $_SESSION['database_borrada'] = false;
}

$sql2 = "CREATE DATABASE IF NOT EXISTS `nba2`;";
$resultado2 = $conn -> query($sql2);
echo "Connected successfully";

mysqli_close($conn);

header("Location:home.php");