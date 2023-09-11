<?php
session_start();
include '../Conexion/conexion.php';
$enviar = @$_REQUEST["enviar"];
$cedula = @$_REQUEST["cedula"];
if ($enviar == "Buscar") {
    $query = mysqli_query($conexion, "SELECT * FROM persona WHERE cedula='$cedula'");
    while ($dato = mysqli_fetch_array($query)) {
        $_SESSION["persona.buscar"]=$dato;
        //$nombre = $dato['nombre'];
        //$apellido = $dato['apellido'];
        //$telefono = $dato['telefono'];
        header("Location: ../vista/buscar.php");
        exit;
    }
} else if ($enviar == "Editar") {
    $nombre = @$_REQUEST["nombre"];
    $apellido = @$_REQUEST["apellido"];
    $telefono = @$_REQUEST["tele"];
    $query = mysqli_query($conexion, "UPDATE PERSONA SET nombre='$nombre',apellido='$apellido',telefono='$telefono' WHERE cedula='$cedula'");

    header("Location:../vista/buscar.php");
}
