<?php
/**
 * Sesiones (2) 01 - sesiones-2-01-4.php
 *
 * @author Escriba aquí su nombre
 *
 */

session_start();
$_SESSION['error_apellido']  = "";  
    
    

if (isset($_POST['apellidos']) && (($_POST['apellidos'] != ""))){
     $_SESSION['apellidos']  = $_POST['apellidos'];
     
     
     header("Location:sesiones-2-01-5.php");

} else {
    $_SESSION['error_apellido']  = 'No ha introducido los apellidos correctamente';
    header("Location:sesiones-2-01-3.php");
}
?>
