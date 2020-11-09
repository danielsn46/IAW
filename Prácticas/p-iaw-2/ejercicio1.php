<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php
         /*
         Formulario simple con los siguientes campos
Nombre de la fiesta (text), 
Numero de personas (number), 
radio input para indicar si la fiesta es privada o no
Usa un Select para el Tipo de musica para indicar ("POP, ROCK, JAZZ, INDIE")
Usa input Checkbox para indicar los espacios donde con los que cuenta la fiesta ("barras", "escenarios", "jardin", "zona chill",  etc)
Usa Textarea para otros comentarios de interes
Boton submit con el nombre Enviar
Mostrar los resultados en otra pagina ejercicio1post.php
         */
        echo "<form action='dos.php' method='POST' enctype='multipart/form-data'>";
        echo "<input type='hidden' name='tipo_formulario' value='Datos personales'>";
        echo "Nombre: <input type='text' name='nombre'></br>";
        echo "Edad: <input type='number' name='edad'></br>";
        echo "Radio: <input type='radio' name='sexo' value='M' checked> M";
        echo "<input type='radio'  name='sexo' value='F'> F</br>";
        echo "Instalaciones: <input type='checkbox' name='extra[]' value='garaje' > Garaje";
        echo "<input type='checkbox'  name='extra[]' value='jardin' checked> Jardin";
        echo "<input type='checkbox'  name='extra[]' value='piscina'> Piscina</br>";

       echo "<select name='ciudad'>";
        echo "<option value='34004'>Palencia</option>";
        
        echo "</select></br>";
        
        echo "<textarea name='comentarios' cols='40' rows='6'>";
        echo"</textarea></br>";
        echo "<input type='submit' value='Enviar'>";
        echo "</form>";
        ?>
    </body>
</html>