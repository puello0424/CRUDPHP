<?php
include '../Conexion/conexion.php';
$cedula=@$_REQUEST["cedula"];
$nombre=@$_REQUEST["nombre"];
$apellido=@$_REQUEST["apellido"];
$telefono=@$_REQUEST["telefono"];


$consultaEliminar="DELETE FROM PERSONA WHERE cedula='$cedula'";
$rconsultE=$conexion->query($consultaEliminar);
if($rconsultE){
  header("Location:../vista/listar.php");
}
 ?>
?>