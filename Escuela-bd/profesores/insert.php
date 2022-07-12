<?php
require_once("../Lib/functions.php");
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro profesores</title>
</head>
<body>
    <h1>Ingrese datos del Profesor<small><a href="../profesores/index_3.php">Regresar </a><small></h1>
    <form action= "insert_query.php" method="post">
        <div class="datos_profesor">
            <label for="name">Ingresar Nombre:</label>
            <input type="text" placeholder="Profesor" name="name" id="name">
            <br><br>
        </div>
        
        <div class="datos_profesor">
            <label for="apll">Ingresar Apellido:</label>
            <input type="text" placeholder="Apellido" name="apll" id="apll">
            <br><br>
        </div>
        
        <div class="datos_profesor">
            <label for="tel">Ingresar Teléfono:</label>
            <input type="text" placeholder="Número" name="tel" id="tel">
            <br><br>
        </div>

        <div class="datos_profesor">
            <label for="email">Ingresar Email:</label>
            <input type="text" placeholder="nombre@unid.com" name="email" id="email">
            <br><br>
        </div>

        <div class="datos_profesor">
            <label for="sts">Ingresar Estatus:</label>
            <input type="text" placeholder="estatus" name="sts" id="sts">
            <br><br>
        </div>
        
        <input type="submit" value="Registrar">
    </form>
</body>
</html>