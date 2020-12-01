
<html>
    <head>
        <title>Ejercicio1</title>
    </head>
    <body>
        <ol>
            <?php
                $cyl = [
                'palencia',
                'leon',
                'burgos',
                'zamora',
                'valladolid',
                'soria',
                'segovia',
                'salamanca',
                'avila'
                ];
                foreach ($cyl as $key => $value){

                    echo "<li>".$key."</li>";
                }
                
                foreach ($cyl as $provincia){

                    echo "<li>".$provincia."</li>";
                }
                
                function getProvinciasCYL($cyl){
                    
                    for ($i = 0; $i < (count($cyl)); $i++) {
                        echo "<li>".$cyl[$i]."</li>";
                    }
                    
                }
                getProvinciasCYL($cyl);
            ?>
        </ol>
    </body>
</html>