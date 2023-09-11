<?php
include '../Conexion/conexion.php';
$cedula=@$_REQUEST["cedula"];
$nombre=@$_REQUEST["nombre"];
$apellido=@$_REQUEST["apellido"];
$tele=@$_REQUEST["tele"];
$guardar=@$_REQUEST["guardar"];

if ($guardar = "guardar") {
  $query="INSERT INTO PERSONA(cedula,nombre,apellido,telefono)VALUES('$cedula','$nombre','$apellido',$tele)";
  $resul=$conexion->query($query);
  header("Location:../vista/guardar.php");
}
else {
  echo "la conexion fue mala";
}

 ?>
