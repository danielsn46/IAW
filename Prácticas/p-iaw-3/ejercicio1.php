<html>
    <head>
        <title>Ejercicio 1</title>
        <style>
            span{
                color:red;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <?php
        $errores = [];
        // Control de errores
        if (isset($_POST['enviar'])){
            if($_POST['nombre'] == ""){
                $errores['nombre'] = "El nombre de la fiesta es requerido";
              }
            
            if(isset($_POST['espacio']) == ""){
                $errores['espacio'] = "Los espacios de la fiesta son requeridos";
            }
        }

        if (count($errores) == 0 && (isset($_POST['enviar']))){
            echo "Formulario: ".$_POST['formulario']. " <br>";
            echo "El nombre de la fiesta es: ".$_POST['nombre']. " <br>";
            echo "El numero de personas que acudiran: ".$_POST['personas']. " años </br>";
            echo "La fiesta sera: ".$_POST['publica']. " <br>";
            echo "El tipo de musica sera: ".$_POST['tipo']. " <br>";

            if(isset($_POST['espacio'])){
                $espacios = "";
                foreach ($_POST['espacio'] as $key => $value) {

                    $espacios = $espacios.$value.", ";

                }
                echo "Los espacios elegidos son: ".$espacios. " </br>";

            }else{
                echo "No ha seleccionado ningun espacio </br>";
            }
            
            echo "Comentarios: ".$_POST['comentarios']. " </br>";
        
        
        
        } else {
            ?>
            <form action='ejercicio1.php' method='POST' enctype='multipart/form-data'>
            <input type='hidden' name='formulario' value='Datos'>
            Nombre de la fiesta: <input type='text' name='nombre'>
            <?php if(isset($errores['nombre'])){
            echo "<span class='red'>".$errores['nombre']."</span>";
            }?>
            <br>
            Numero de personas: <input type='number' name='personas'><br>
            <br>
            <input type='radio' name='publica' value='Publica' checked> Publica
            <input type='radio'  name='publica' value='privada'> Privada<br>

            <br>
            Tipo de Musica  <select name='tipo'>
            <option value='pop'>Pop</option>
            <option value='rock'>Rock</option>
            <option value='jazz'>Jazz</option>
            <option value='indie'>Indie</option>       
            </select><br>
            <br>
            
            <?php if(isset($errores['tipo'])){
            echo "<span class='red'>".$errores['tipo']."</span>";
            }?>


            Espacios: <input type='checkbox' name='espacio[]' value='barras' > Barras
            <input type='checkbox'  name='espacio[]' value='escenarios' checked> Escenarios
            <input type='checkbox'  name='espacio[]' value='jardin'> Jardín<br>
            <input type='checkbox'  name='espacio[]' value='zonachill'> Zona Chill<br>
            <input type='checkbox'  name='espacio[]' value='etc'> Etc
            <br>
            <br>
            <?php if(isset($errores['espacio'])){
            echo "<span class='red'>".$errores['espacio']."</span>";
            }?>
            <br>
            <br>
            <textarea name='comentarios' cols='50' rows='5'>
            </textarea><br>
            <br>
            <input type='submit' name='enviar' value='Enviar' >
            </form>
        <?php    
        }
        ?>
    </body>
</html>