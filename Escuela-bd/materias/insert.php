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
    <h1>Ingrese Nueva Materia <small><a href="../materias/index_2.php">Regresar</a></small></h1>
    <form action = "insert_query.php" method= "post">
    <div class= "datos-materia">
        <label for="ID">Ingresar ID:</label>
        <input type="text" placeholder="ID" name="ID" id="ID">
        <br><br>
    </div>
    <div class= "datos-materia">
        <label for="mat">Ingrese Materia:</label>
        <input type="text" placeholder="Materia" name="mat" id="mat">
        <br><br>
    </div>
    <div class= "datos-materia">
        <label for="cuat">Ingresar Cuatrimestre:</label>
        <select name="cuat" >
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
    <div class= "datos-materia">
        <label for="lic">Ingresar Licenciatura:</label>
        <input type="text" placeholder="Licenciatura" name="lic" id="lic">
        <br><br>
    </div>
        <input type="submit" name="submit" value="Registrar">

    </form>
</body>
</html>