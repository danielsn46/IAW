<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
            
        <?php
            $email = 'florindo.lopdel@educa.jcyl.es';
            
            
            
            for ($i=0; $i < 10 ; $i++ ) {
                echo str_replace("@", $i."@", $email)."<br>";

            }
            
        ?>
    </body>
</html>