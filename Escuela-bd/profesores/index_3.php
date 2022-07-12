<?php
    require_once("../Lib/functions.php");
    $profesor = get_all_profesores($connect);
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
<h1>Profesores Unid<small><a href="../profesores/formulario.php">Añadir Profesor</a></small></h1>
<h4><a href="../index_pr.php">Regresar</a></h4>
    <table border = "1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>ESTATUS</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($fila = mysqli_fetch_array($profesor)) {
            ?>
            <tr>
                <td><?php echo $fila['ID'];?></td>
                <td><?php echo $fila['Nombre'];?></td>
                <td><?php echo $fila['Apellidos'];?></td>
                <td><?php echo $fila['Telefono'];?></td>
                <td><?php echo $fila['Email'];?></td>
                <td><?php echo $fila['ESTATUS'];?></td>
                <td> <a href= "detail_prof.php?ID=<?php echo $fila['ID'] ?>">Detalle</a></td>
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