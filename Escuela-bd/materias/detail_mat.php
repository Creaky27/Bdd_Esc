<?php
require_once("../Lib/functions.php");
$ID = $_GET['ID'];
$resultado = get_materia($connect, $ID);
$materia = mysqli_fetch_array($resultado);
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
    <h1>Materias <?php echo $materia['Nombre_Materia'];?> <small><a href="../materias/index_2.php">Regresar</a></small></h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre_Materia</th>
                <th>Cuatrimestre</th>
                <th>Licenciatura</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $materia['ID']?></td>
                <td><?php echo $materia['Nombre_Materia']?></td>
                <td><?php echo $materia['Cuatrimestre']?></td>
                <td><?php echo $materia['Licenciatura']?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>