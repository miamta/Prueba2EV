<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertar Usuarios</title>
  </head>
  <body>
    <button><a href="Index.php">Formulario</a></button>
    <button><a href="listadoUsuarios.php">ListadoUsuario</a></button>
    <button><a href="muestraUsuario.php">muestraUsuario</a></button>



    <h3>Usuarios insertados:</h3>
    <?php
    // conexion a la BD
  include "juegodb.php";
  $juego = new juegodb();

   $resultado = $juego->InsertarUsuarios($_POST["Nombre"],$_POST["Apellidos"],$_POST["Edad"],$_POST["Curso"],$_POST["Puntuacion"],$_POST["correo"]);
   // Muestra el ultimo jugador insertado
   $resultado = $juego->mostrarUltimo($_POST["Nombre"]);
   // echo "Usuario Insertado correctamente";
   foreach ($resultado as $fila){
 		echo "Nombre: ".$fila['Nombre']."<br>";
 	}
     ?>

  </body>
</html>
