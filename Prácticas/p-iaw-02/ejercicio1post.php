<HTML>
  <BODY>
    <?php
      echo "Formulario: ".$_POST['formulario']. " <br>";
      echo "El nombre de la fiesta es: ".$_POST['nombre']. " <br>";
      echo "El numero de personas que acudiran: ".$_POST['personas']. " años </br>";
      echo "La fiesta sera: ".$_POST['publica']. " <br>";
      echo "El tipo de musica sera: ".$_POST['tipo']. " <br>";

      if(isset($_POST['espacio'])){
        $espacios = "";
        foreach ($_POST['espacio'] as $key => $value) {

            $espacios = $espacios.$value.", ";

        }
        echo "Los espacios elegidos son: ".$espacios. " </br>";

      }else{
        echo "No ha seleccionado ningun espacio </br>";
      }
      
      echo "Comentarios: ".$_POST['comentarios']. " </br>";


    ?>
  </BODY>
</HTML>