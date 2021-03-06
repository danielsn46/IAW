<?php
/**
 * Escriba un programa que cada vez que se ejecute muestre tres cuadrados contiguos con un lado entre 50 y 150 píxeles, al azar.
 *
 * Crea 3 dif con width, height y fondos distintos. Cambia el widht y el heigh con un random
 *
 * @author Escriba aquí su nombre
 *
 */
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    DATABASE MENU
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>OPCIONES DATABASE</h1>

  <ol>
    <li>
      <a href="crear_equipo.php">Crear tabla equipo</a>
      <?php
        if(isset($_SESSION['crear_tabla_equipo'])){
          if($_SESSION['crear_tabla_equipo']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li><a href="insertar_datos_equipo.php">Insertar datos equipo</a>
      <?php
        if(isset($_SESSION['insertar_tabla_equipo'])){
          if($_SESSION['insertar_tabla_equipo']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li><a href="insertar_datos_equipo_form.php">Insertar datos equipo formulario</a></li>
    <li><a href="listar_equipo.php">Listar equipos</a></li>
    <li>
      <a href="crear_jugador.php">Crear tabla jugador</a>
      <?php
        if(isset($_SESSION['crear_tabla_jugador'])){
          if($_SESSION['crear_tabla_jugador']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li>
      <a href="insertar_datos_jugador.php">Insertar datos jugador</a>
      <?php
        if(isset($_SESSION['insertar_datos_jugador'])){
          if($_SESSION['insertar_datos_jugador']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    
    <li><a href="insertar_datos_jugador_form.php">Insertar datos jugador formulario</a></li>
    <li><a href="listar_jugador.php">Listar jugadores</a></li>
    <li>
      <a href="crear_partido.php">Crear tabla partido</a>
      <?php
        if(isset($_SESSION['crear_tabla_partido'])){
          if($_SESSION['crear_tabla_partido']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li>
      <a href="insertar_datos_partido.php">Insertar datos partido</a>
      <?php
        if(isset($_SESSION['insertar_datos_partido'])){
          if($_SESSION['insertar_datos_partido']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li>
      <a href="crear_posicion.php">Crear tabla posicion</a>
      <?php
        if(isset($_SESSION['crear_tabla_posicion'])){
          if($_SESSION['crear_tabla_posicion']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li><a href="insertar_datos_posicion_form.php">Insertar datos posicion formulario</a></li>
    <li><a href="listar_posicion.php">Listar posiciones</a></li>
    <li>
      <a href="insertar_datos_posicion.php">Insertar datos posicion</a>
      <?php
        if(isset($_SESSION['insertar_datos_posicion'])){
          if($_SESSION['insertar_datos_posicion']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>

    <li><a href="crear_jugador_posicion.php">Crear tabla jugador-posicion</a>
      <?php
        if(isset($_SESSION['crear_jugador_posicion'])){
          if($_SESSION['crear_jugador_posicion']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li><a href="insertar_datos_jugador_posicion.php">Insertar datos jugador-posicion</a>
      <?php
        if(isset($_SESSION['insertar_datos_jugador_posicion'])){
          if($_SESSION['insertar_datos_jugador_posicion']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li>
    <a href="reset.php">Resetear tabla</a>
      <?php
        if(isset($_SESSION['resetear_base_datos'])){
          if($_SESSION['resetear_base_datos']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
  </ol>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
