<?php
require_once("../Lib/functions.php");
$ID = $_GET['ID'];
$resultado = get_profesor($connect, $ID);
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
    <table border = "1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $profesor['ID'];?></td>
                <td><?php echo $profesor['Nombre'];?></td>
                <td><?php echo $profesor['Apellidos'];?></td>
                <td><?php echo $profesor['Telefono'];?></td>
                <td><?php echo $profesor['Email'];?></td>
                <td><?php echo $profesor['ESTATUS'];?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>