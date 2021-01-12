<html>
    <head>
        <title>Practica 2</title>
    </head>
    <body>
        <?php
           $profesores = array (
               'Florindo',
               'Javier',
               'Marisol'
           ) ;
           $asignaturas = array (
               'IAW',
               'SRI',
               'SAD',
               'ASO',
               'ASGBD',
               'EIE',
           );
            function numerorand($profesores){
                $numero = (rand(0, (count($profesores)-1)));
                return $numero;          
            }
                       
           for ($i=0; $i<count($asignaturas); $i++){
           echo "La asignatura <b>".$asignaturas[$i]." </b>será impartida por <b>".$profesores[numerorand($profesores)]."</b><br>";
           
           }
           
           
        ?>
    </body>
</html>