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
        <form action='ejercicio2.php' method="post" enctype='multipart/form-data'>
            <input type='hidden' name='formulario' value='tabla'>    
            Valor <input type='number' name='input'><br> 
            
            
            <input type='submit' name='CALCULAR' value='CALCULAR' >
            
        </form>
        <ul>
        <?php
            if (isset($_POST['CALCULAR'])){
            if(isset($_POST['input']) && ($_POST['input'] != "")){
                for ($i=1; $i<=10; $i++){
                    echo "<li>".($_POST['input'])." * ".$i." = " .(($_POST['input'])*$i);
                }
            }
            else {
                echo "No has introducido el numero a calcular";
            }
        }
        ?>
        </ul>

    </body>
</html>