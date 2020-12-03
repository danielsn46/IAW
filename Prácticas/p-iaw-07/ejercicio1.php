<html>
    <head>
        <title>Ejer1</title>
        <style>
            span{
                color:red;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <form action='ejercicio1.php' method="post" enctype='multipart/form-data'>
            <input type='hidden' name='formulario' value='calculadora'>    
            Valor 1 <input type='number' name='input_a'><br> 
            Valor 2 <input type='number' name='input_b'><br>
            
            <input type='submit' name='SUMAR' value='SUMAR'>
            <input type='submit' name='RESTAR' value='RESTAR'>
            <input type='submit' name='MULTIPLICAR' value='MULTIPLICAR'>
            <input type='submit' name='DIVIDIR' value='DIVIDIR'>
        </form>
        <?php
            
            if(isset($_POST['input_a']) && ($_POST['input_a'] != "") && (isset($_POST['input_b']) && ($_POST['input_b'] != ""))){
                if (isset($_POST['SUMAR'])){
                    echo "SUMA";
                    echo "La suma de los valores ".$_POST['input_a']." y ".$_POST['input_b']." es igual a ".($_POST['input_a']+$_POST['input_b']);
                } 
                if (isset($_POST['RESTAR'])) {
                    echo "La resta de los valores ".$_POST['input_a']." y ".$_POST['input_b']." es igual a ".($_POST['input_a']-$_POST['input_b']);
                } 
                if (isset($_POST['MULTIPLICAR'])) {
                    echo "La multiplicacion de los valores ".$_POST['input_a']." y ".$_POST['input_b']." es igual a ".($_POST['input_a']*$_POST['input_b']);
                } 
                if (isset($_POST['DIVIDIR'])) {
                    echo "La division de los valores ".$_POST['input_a']." y ".$_POST['input_b']." es igual a ".($_POST['input_a']/$_POST['input_b']);
                } 
            }
            else {
                echo "No has introducido los dos valores correctamente";
            }
        ?>

    </body>
</html>