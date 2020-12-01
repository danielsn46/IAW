<!-- Usa una función Php que pasadas 2 variables como argumento te devuelva
 la más grande de ellas. La función se debe llamar getGratherValue() -->
 <html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
            $a = 7;
            $b = 7;
            function getGratherValue($a, $b){
                if ($a < $b){
                    echo "El valor más grande es el de".$b;
                } elseif ($a > $b){
                    echo "El valor más grande es el de".$a;
                } else {
                    $devolver = $a." es igual que ".$b;
                    echo $devolver;
                }
            }
            getGratherValue($a, $b);
        ?>
    </body>
</html>