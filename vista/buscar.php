<?php
session_start();
$dato = @$_SESSION["persona.buscar"];
    $cedula=@$dato["cedula"];
    $nombre = @$dato['nombre'];
    $apellido =@$dato["apellido"];
    $telefono = @$dato['telefono'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="../css/style.css">
    <title></title>
  </head>
  <body>
      <form action="../controlador/ControlBuscar.php" method="post">
      <center>
        <fieldset>
          <table>
            <tr>
              <th>Cedula :</th>
              <td><input type="number" name="cedula" placeholder="Diga cedula"required value="<?=  $cedula ?>"></td>
            </tr>
            <tr>
              <th>Nombre :</th>
              <td><input type="text"name="nombre" <?= (@$nombre) ? '' : 'readonly' ?>  value="<?=  @$nombre ?>"></td>
            </tr>
            <tr>
              <th>Apellido :</th>
              <td><input type="text"name="apellido" <?= (@$apellido) ? '' : 'readonly' ?>  value="<?=  @$apellido ?>"></td>
            </tr>
            <tr>
              <th>Telefono :</th>
              <td><input type="number"name="tele" <?= (@$telefono) ? '' : 'readonly' ?> value="<?=  @$telefono ?>"></td>
           </tr>
          </table>
          <input type="submit" name="enviar" value="Buscar" >
            &nbsp;&nbsp;&nbsp;&nbsp;
          <input type="submit" name="enviar" value="Editar" <?= (@$nombre) ? '' : 'disabled' ?>>
            &nbsp;&nbsp;&nbsp;&nbsp;
          <a class="btn btn-primary" href="../index.php" role="button">Volve</a>
        </fieldset>
      </center>
    </form>
  </body>
</html>
