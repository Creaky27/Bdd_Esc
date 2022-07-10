<?php
require_once("../Lib/functions.php");
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripción Alumnos</title>
</head>
<body>
    <h1>Ingrese datos del Nuevo Alumno <small><a href="../alumnos/index.php">Regresar</a></small></h1>
    <form action = "insert_query.php" method= "post">
    <div class= "datos-alumno">
        <label for="name">Ingresar el Nombre:</label>
        <input type="text" placeholder="Alumno" maxlength="30" nombre="name" id="name">
        <br><br>
    </div>
    <div class= "datos-alumno">
        <label for="apll">Ingresar Apellido:</label>
        <input type="text" placeholder="Apellido" maxlength="30" nombre="apll" id="apll">
        <br><br>
    </div>
    <div class= "datos-alumno">
        <label for="tel">Ingresar Teléfono:</label>
        <input type="text" placeholder="Número" maxlength="10" nombre="tel" id="tel">
        <br><br>
    </div>
    <div class= "datos-alumno">
        <label for="email">Ingresar Email:</label>
        <input type="text" placeholder="nombre@unid.com" maxlength="30" nombre="email" id="email">
        <br><br>
    </div>
    <div class= "datos-alumno">
        <label for="lic">Ingresar Licenciatura:</label>
        <input type="text" placeholder="Licenciatura" maxlength="30" nombre="lic" id="lic">
        <br><br>
    </div>
    <div class= "datos-alumno">
        <label for="cuat">Ingresar Cuatrimestre:</label>
        <select name="cuat" id="">
            <option value="primero">1ro</option>
            <option value="segundo">2do</option>
            <option value="tercero">3ro</option>
            <option value="cuarto">4to</option>
            <option value="quinto">5to</option>
            <option value="sexto">6to</option>
            <option value="septimo">7mo</option>
            <option value="octavo">8vo</option>
            <option value="noveno">9no</option>
        </select>
        <br><br>
    </div>
    <div class= "datos-alumno">
        <label for="sts">STATUS:</label>
        <input type="text" placeholder="ESTATUS" maxlength="10" nombre="sts" id="sts">
        <br><br>
    </div>

        <input type="submit" name="submit" value="Registrar">

    </form>
</body>
</html>