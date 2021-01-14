<?php
/**
 * Sesiones (2) 01 - sesiones-2-01-2.php
 *
 * @author Escriba aquí su nombre
 *
 */

session_start();
$_SESSION['error'] = "";
    
    
    

if (isset($_POST['nombre']) && (($_POST['nombre'] != ""))){
     $_SESSION['nombre']  = $_POST['nombre'];
     
     
     header("Location:sesiones-2-01-3.php");

} else {
    $_SESSION['error']  = 'No ha introducido el nombre correctamente';
    header("Location:sesiones-2-01-1.php");
}
?>