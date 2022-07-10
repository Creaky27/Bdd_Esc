<?php
require_once("../Lib/functions.php");
$ID_prof = $_GET['ID_prof'];
$resultado = get_profesor($connect, $ID_prof);
$profesor = mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesores Unid</title>
</head>
<body>
<h1>Profesor Unid <?php echo $profesor['Apellidos']." ".$profesor['Nombre'];?> <small><a href="../profesores/index_3.php">Regresar</a></small></h1>
    <table>
        <thead>
            <tr>
                <th>ID_prof</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $profesor['ID_prof'];?></td>
                <td><?php echo $profesor['Nombre'];?></td>
                <td><?php echo $profesor['Apellidos'];?></td>
                <td><?php echo $profesor['Teléfono'];?></td>
                <td><?php echo $profesor['Email'];?></td>
                <td><?php echo $profesor['STATUS'];?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>