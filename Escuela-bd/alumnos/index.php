<?php
    require_once("../Lib/connect.php");
    $consulta = "SELECT * FROM alumnos";
    $resultado = mysqli_query($connect, $consulta);
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos Unid</title>
</head>
<body>
    <h1>Alumnos Unid</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Licenciatura</th>
                <th>Cuatrimestre</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($fila = mysqli_fetch_array($resultado)) {
            ?>
            <tr>
                <td><?php echo $fila['ID'];?></td>
                <td><?php echo $fila['Nombre'];?></td>
                <td><?php echo $fila['Apellido'];?></td>
                <td><?php echo $fila['Teléfono'];?></td>
                <td><?php echo $fila['Email'];?></td>
                <td><?php echo $fila['Cuatrimestre'];?></td>
                <td><?php echo $fila['Licenciatura'];?></td>
                <td><?php echo $fila['STATUS'];?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>