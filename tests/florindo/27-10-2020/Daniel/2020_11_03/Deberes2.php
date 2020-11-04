<html>
    <head>
        <title>Practica 1</title>
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
              return $profesores(rand(0, count($profesores)));
              
           }
           echo numerorand($profesores);
           /*
           for ($i=0; $i<count($asignaturas); $i++){
           echo "La asignatura".numerorand($asignaturas)."será impartida por".numerorand($profesores);
           
           }
           */
        ?>
    </body>
</html>