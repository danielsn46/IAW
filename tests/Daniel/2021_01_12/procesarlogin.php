<?php
/**
 * Escriba un programa que cada vez que se ejecute
 * muestre un círculo de 50px de radio y de un color elegido al azar.
 *
 * @author Escriba aquí su nombre
 *
 */
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Procesar Login</title>
</head>

<body>
  <h1>Login</h1>


  <?php
    
    $usernameValid = "daniel";
    $passwordValid = "123456";
    $usernameValid2 = "admin";
    $passwordValid2 = "123456";
    $errores = [];

    if(isset($_POST['enviar'])){
        if((isset($_POST['username']) && $_POST['username'] != $usernameValid) &&(isset($_POST['password']) && $_POST['password'] != $passwordValid2)){
            $errores[] = "usuario no encontrado";
        }
        
        if((isset($_POST['password']) && $_POST['password'] != $passwordValid2)&&(isset($_POST['password']) && $_POST['password'] != $passwordValid)){
            $errores[] = "Pasword no encontrada";
        }
        
    }

    if(count($errores) == 0){
        // LOGIN OK
        $_SESSION['sesion'] = "iniciada";
        if ($_POST['username'] == $usernameValid){
            $_SESSION['usermane'] =$usernameValid;
        }
        if ($_POST['usermane'] == $usernameValid2){
            $_SESSION['usermane'] = $usernameValid2;
        }
        var_dump($_POST['username']);die;
        header("Location: http://localhost/Repositorio/tests/Daniel/2021_01_12/login.php");
        die();
    }else{
        //ERRORES TIENE VALORES, LUEGO EL LOGIN HA FALLADO
        echo "<ul>";
        foreach($errores as $error ){

            echo "<li>".$error."</li>";
            
        }
        echo "</ul>";
    }

    ?>
</body>
</html>
