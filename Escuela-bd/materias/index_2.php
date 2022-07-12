<?php
require_once("../Lib/functions.php");
$materia = get_all_materias($connect);
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
<h1>Materias<small><a href="../materias/insert.php">Agregar materia</a></small></h1>
<h4><a href="../index_pr.php">Regresar</a></h4>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Materia</th>
                <th>Cuatrimestre</th>
                <th>Licenciatura</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($fila = mysqli_fetch_array($materia)) {
            ?>
            <tr>
                <td><?php echo $fila['ID'];?></td>
                <td><?php echo $fila['Materia'];?></td>
                <td><?php echo $fila['Cuatrimestre'];?></td>
                <td><?php echo $fila['Licenciatura'];?></td>
                <td> <a href= "detail_mat.php?ID=<?php echo $fila['ID'] ?>">Detalle</a></td>
                <td> <a href= "update.php?ID=<?php echo $fila['ID'] ?>">Editar</a></td>
                <td> <a href= "delete.php?ID=<?php echo $fila['ID'] ?>">Eliminar</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>