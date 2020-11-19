<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <ol>
        
        
        <?php

            $servername = "localhost";
            $database = "world";
            $username = "test";
            $password = "test";
            // Create connection
            $connect = mysqli_connect($servername, $username, $password, $database);
            if (!$connect) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $limit = 13;
            
            function consulta($connect, $limit){
                $query = "SELECT * FROM City LIMIT ".$limit;
                $resultado = $connect->query($query);
                return $resultado;
                
            } 

            $resultado = consulta($connect, $limit);

            while( $row = $resultado->fetch_array())
            {
                echo "<li>La ciudad ".$row['Name']." con código ".$row['CountryCode']. " pertenece al distrito " . $row['District']."</li>";
                //Por que no funciona
                $resultado->close();

            }
            
            
            
            mysqli_close($connect);
        ?>
        </ol>
    </body>
</html>






