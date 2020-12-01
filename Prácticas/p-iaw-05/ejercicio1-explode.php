<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
            
        <?php
            $email = 'florindo.lopdel@educa.jcyl.es';
            $parte1 = explode('@', $email);
            
            
            for ($i=0; $i < 10 ; $i++ ) {
                echo $parte1[0].$i."@".$parte1[1]."<br>";

            }
            
        ?>
    </body>
</html>