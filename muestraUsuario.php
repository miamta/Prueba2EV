<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de usuarios</title>
  </head>
  <body>
    <button><a href="Index.php">Formulario</a></button>
    <button><a href="listadoUsuarios.php">ListadoUsuario</a></button>
    <button><a href="muestraUsuario.php">muestraUsuario</a></button>



    <h3>Datos de usuarios</h3>
    <?php
    // conexion a la BD
  include "juegodb.php";
  $juego = new juegodb();
// LLamamos a la funcion para mosrtar usuario con ID_2
   $resultado=$juego->muestraUsuario($_GET["ID"]);

   while($fila=$resultado->fetch_assoc()){
          echo "Nombre: ".$fila["Nombre"]."<br>";
          echo "Apellidos: ".$fila["Apellidos"]."<br>";
          echo "Edad: ".$fila["Edad"]."<br>";
          echo "Curso: ".$fila["Curso"]."<br>";
          echo "Puntuacion: ".$fila["Puntuacion"]."<br>";
          echo "Correo: ".$fila["correo"]."<br>";
          echo "<hr>";

   }






     ?>

  </body>
</html>
