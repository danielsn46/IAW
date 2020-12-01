<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        
        <form action='ejercicio1post.php' method='POST' enctype='multipart/form-data'>
        <input type='hidden' name='formulario' value='Datos'>"
        "Nombre de la fiesta: <input type='text' name='nombre'><br>
        "Numero de personas: <input type='number' name='personas'><br>
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


        Espacios: <input type='checkbox' name='espacio[]' value='barras' > Barras
        <input type='checkbox'  name='espacio[]' value='escenarios' checked> Escenarios
        <input type='checkbox'  name='espacio[]' value='jardin'> Jardín<br>
        <input type='checkbox'  name='espacio[]' value='zonachill'> Zona Chill<br>
        <input type='checkbox'  name='espacio[]' value='etc'> Etc<br>
       
        <textarea name='comentarios' cols='50' rows='5'>
        </textarea><br>
        <br>
        <input type='submit' value='Enviar'>
        </form>
        
        <?php

        ?>
    </body>
</html>