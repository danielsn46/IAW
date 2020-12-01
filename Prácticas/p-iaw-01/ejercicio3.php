<html>
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>
        <?php
            echo "<table border='1px solid'>";
            echo "<tr>";
            echo "<td><b><center>Fecha</center></b></td>";
            echo "<td><b><center>Hora</center></b></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>".date('Y F j')."</td>";
            echo "<td>".date('G:i a')."</td>";
            echo "<tr>";
            echo "</table>";
            // Imprimiremos Mes Día, Año, hora y pm/am

        ?>
    </body>
</html>