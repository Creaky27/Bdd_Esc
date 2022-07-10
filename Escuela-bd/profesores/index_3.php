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
<h1>Profesores Unid<small><a href="#">Añadir Profesor</a></small></h1>
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
            <?php
                while ($fila = mysqli_fetch_array($profesor)) {
            ?>
            <tr>
                <td><?php echo $fila['ID_prof'];?></td>
                <td><?php echo $fila['Nombre'];?></td>
                <td><?php echo $fila['Apellidos'];?></td>
                <td><?php echo $fila['Teléfono'];?></td>
                <td><?php echo $fila['Email'];?></td>
                <td><?php echo $fila['STATUS'];?></td>
                <td> <a href= "detail.php?ID_prof=<?php echo $fila['ID_prof'] ?>" >Detalle</a></td>
                <td> <a href= "insert.php?ID_prof=<?php echo $fila['ID_prof'] ?>">Editar</a></td>
                <td> <a href= "update.php?ID_prof=<?php echo $fila['ID_prof'] ?>">Eliminar</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>