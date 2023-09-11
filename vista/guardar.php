<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <title></title>
    </head>
    <body>
        <form action="../controlador/ControlGuardar.php" method="post">
            <center>
                <fieldset>
                    <legend>Datos para Guardar</legend>
                    <table>
                        <tr>
                            <th>Cedula :</th>
                            <td><input type="number"name="cedula"placeholder="Digite su cedula"required></td>
                        </tr>
                        <tr>
                            <th>Nombre :</th>
                            <td><input type="text"name="nombre"placeholder="Escriba su nombre"required></td>
                        </tr>
                        <tr>
                            <th>Apellido :</th>
                            <td><input type="text"name="apellido"placeholder="Escriba su apellido"required></td>
                        </tr>
                        <tr>
                            <th>Telefono :</th>
                            <td><input type="number"name="tele"placeholder="Digite su numero de telefono"required></td>
                        </tr>
                    </table>
                    <input type="submit" name="guardar" value="Guardar">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                      <a class="btn btn-primary" href="../index.php" role="button">Volve</a>
                </fieldset>
            </center>
        </form>
    </body>
</html>
