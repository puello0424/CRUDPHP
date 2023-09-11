
<?php
include '../Conexion/conexion.php';
$query=mysqli_query($conexion,"SELECT * FROM PERSONA");

?>
<!DOCTYPE ht  ml>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
     <script type="text/javascript">

            function confirmar(){
                var SI_NO = confirm("¿Seguro de desea eliminar a esta persona?");
                return SI_NO;
            }
            </script>
  </head>
  <body>
  <center>
      <form action="../controlador/ControlEliminar.php"method="post">
    <table border="1">
      <tr>
      <th>Cedula</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Telefono</th>
     </tr>
    <?php
        while ($extraido = mysqli_fetch_array($query)) {
          $cedula = $extraido['cedula'];
          $nombre = $extraido['nombre'];
          $apellido = $extraido['apellido'];
          $telefono = $extraido['telefono'];
      ?>
     <tr>
       <td><?php echo$cedula?></td>
       <td><?php echo$nombre?></td>
       <td><?php echo$apellido?></td>
       <td><?php echo$telefono?></td>
       <td id="samuel1"><a href="eliminar.php?cedula=<!--?= $cedula ?>" onclick="return confirmar();">Eliminiar</a></td>
     </tr>
<?php
}
?>
    </table>
    <a class="btn btn-primary" href="../index.php" role="button">Volve</a>
    </form>
    </center>
  </body>
</html>
