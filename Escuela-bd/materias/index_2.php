<?php
    require_once("../Lib/connect.php");
    $consulta = "SELECT * FROM materias";
    $resultado = mysqli_query($connect, $consulta);
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
</head>
<body>
<h1>Materias</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre_Materia</th>
                <th>Apellido</th>
                <th>Cuatrimestre</th>
                <th>Licenciatura</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($fila = mysqli_fetch_array($resultado)) {
            ?>
            <tr>
                <td><?php echo $fila['ID'];?></td>
                <td><?php echo $fila['Nombre_Materia'];?></td>
                <td><?php echo $fila['Cuatrimestre'];?></td>
                <td><?php echo $fila['Licenciatura'];?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>