<html>
    <head>
        <title>presentacion</title>
        <style>
            body{
                border: grey 5px double;
                width: 1200px;
                height: 500px;
               

            }
            h1{
                text-align: center;
                color:grey;
            }
            img{
                width: 30%;
                height: 30%;
                margin-left: 150px;
            }
            h2{
                margin-top: 30px;
                text-decoration: underline;    
            }
            h3{
                margin-right: 60px;
                text-decoration: underline;
            }
            h4{
                margin-right: 200px;
                font-weight: normal;
            }
            table{
                padding-left: 20px;
            }
            textarea{
                margin-bottom: 20px;
                margin-top: -15px;
            }
        </style>
    </head>
    <body>
        <?php
            $nombre = "Daniel";
            $apellidos = "Sánchez García";
            $edad = 24;
            $foto = "<img src= https://estaticos.muyinteresante.es/media/cache/760x570_thumb/uploads/images/article/5536592a70a1ae8d775df846/dia-del-mono.jpg";
            $competencias = array ("Bachillerato en Ciencias Sociales","Curso de monitor de ocio y tiempo libre" , "Carnet de conducir B");
            
            
            echo "<h1>Currículum Vitae</h1><br>";
            echo "<table>";
            echo "<tr>";
            echo "<td><h3>Nombre</h3> $nombre </td>";
            echo "<td><h3>Apellidos </h3> $apellidos </td>";
            echo "<td><h3>Edad</h3> $edad </td>";
            echo "<td>$foto </td>" ;
            echo "</tr>";
            echo "</table>";

            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo "<h2>Competencias</h2> ";
            echo "<h4>1. $competencias[0]</h4>";
            echo "<h4>2. $competencias[1]</h4>";
            echo "<h4>3. $competencias[2]</h4>";
            echo "</td>";
            
            
            echo "<td>";
            echo "<h2>Información de Contacto</h2> <br>";
            
        ?>

        <form action="send.php" method="post" name="informacion" id="informacion">
            <textarea cols="60" rows="5" name="dudas">
            </textarea>
            <br>
            <input type="submit" value="Confirmar">

        </form>
        </td>
        </tr>
        </table>
    </body>
</html>
