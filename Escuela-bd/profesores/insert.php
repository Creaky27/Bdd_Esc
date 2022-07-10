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
    <form action= "update_prof.php" method="post">
        <div class="datos_profesor">
            <label for="name_prof">Ingresar Nombre:</label>
            <input type="text" placeholder="Alumno" maxlength="30" nombre="name_prof" id="nom_prof">
            <br><br>
        </div>
        
        <div class="datos_profesor">
            <label for="apll_prof">Ingresar Apellido:</label>
            <input type="text" placeholder="Apellido" maxlength="30" nombre="apll_prof" id="apll_prof">
            <br><br>
        </div>
        
        <div class="datos_profesor">
            <label for="tel_prof">Ingresar Teléfono:</label>
            <input type="text" placeholder="Número" maxlength="10" nombre="tel_prof" id="tel_prof">
            <br><br>
        </div>

        <div class="datos_profesor">
            <label for="email_prof">Ingresar Email:</label>
            <input type="text" placeholder="nombre@unid.com" maxlength="30" nombre="email_prof" id="email_prof">
            <br><br>
        </div>
        
        <input type="submit" value="Registrar">
    </form>
</body>
</html>