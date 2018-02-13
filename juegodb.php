<?php
class juegodb
{

   private $host="localhost";
   private $user="root";
   private $pass="";
   private $name="juegos";
   private $conexion;
   private $error=false;
 // Funcion para conectarnos a la base de datos
       function __construct(){
       $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->name);
       if($this->conexion->connect_errno){
   $this->error=true;
     }
   }
 // Funcion de error
       function geterror(){
         return $this->error;
       }

// Funcion para la conexion
   function conexion(){
     return $this->conexion;
    }



// Funcion para listar usuarios en listadoUsuarios.php
function listarUsuarios(){
  return $resultado = $this->conexion()->query("SELECT * FROM usuarios");
}

// Funcion para insertar usuarios en InsertarUsuarios.php
function InsertarUsuarios($Nombre,$Apellidos,$Edad,$Curso,$Puntuacion,$correo){
$sqlinserction="INSERT INTO usuarios(Nombre, Apellidos, correo, Edad, Curso, Puntuacion) VALUES ('".$Nombre."', '".$Apellidos."', '".$correo."', $Edad, $Curso, $Puntuacion)";
$this->conexion()->query($sqlinserction);
}

// Funcion para mostrar el ultimo usuario insertado
public function mostrarUltimo($Nombre){
  $resultado = $this->conexion()->query("SELECT * FROM usuarios WHERE Nombre='".$Nombre."'");
		return $resultado;
}

//Funcion para mostrar el usuario ID_2
public function muestraUsuario($Nombre){
  $resultado = $this->conexion()->query("SELECT * FROM usuarios WHERE ID='".$ID='2'."'");
		return $resultado;
}













}
 ?>
