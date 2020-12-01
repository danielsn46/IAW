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
        echo "<form action='ejercicio1post.php' method='POST' enctype='multipart/form-data'>";
        echo "<input type='hidden' name='formulario' value='Datos'>";
        echo "Nombre de la fiesta: <input type='text' name='nombre'><br>";
        echo "Numero de personas: <input type='number' name='personas'><br>";
        echo "<br>";
        echo "<input type='radio' name='publica' value='Publica' checked> Publica";
        echo "<input type='radio'  name='publica' value='privada'> Privada<br>";

        echo "<br>";
        echo "Tipo de Musica  ";
        echo "<select name='tipo'>";
        echo "<option value='pop'>Pop</option>";
        echo "<option value='rock'>Rock</option>";
        echo "<option value='jazz'>Jazz</option>";
        echo "<option value='indie'>Indie</option>";        
        echo "</select><br>";
        echo "<br>";


        echo "Espacios: <input type='checkbox' name='espacio[]' value='barras' > Barras";
        echo "<input type='checkbox'  name='espacio[]' value='escenarios' checked> Escenarios";
        echo "<input type='checkbox'  name='espacio[]' value='jardin'> Jardín<br>";
        echo "<input type='checkbox'  name='espacio[]' value='zonachill'> Zona Chill<br>";
        echo "<input type='checkbox'  name='espacio[]' value='etc'> Etc<br>";
       
        echo "<textarea name='comentarios' cols='50' rows='5'>";
        echo"</textarea><br>";
        echo "<br>";
        echo "<input type='submit' value='Enviar'>";
        echo "</form>";
        ?>
    </body>
</html>