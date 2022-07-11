<?php
require_once("../Lib/functions.php");
$ID = $_GET['ID'];
$resultado = get_alumno($connect, $ID);
$alumno = mysqli_fetch_array($resultado);
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
    <h1>Actualice datos del Alumno <small><a href="../alumnos/index.php">Regresar</a></small></h1>
    <form action = "update_query.php" method= "post">
    <div class= "datos-alumno">
        <label for="name">Ingresar el Nombre:</label>
        <input type="text" placeholder="Alumno" name="name" id="name" value="<?php echo $alumno['Nombre']; ?>">
        <input type="hidden" name="id" id="id" value="<?php echo $alumno['ID']; ?>">
        <br><br>
    </div>
    <div class= "datos-alumno">
        <label for="apll">Ingresar Apellido:</label>
        <input type="text" placeholder="Apellido" name="apll" id="apll" value="<?php echo $alumno['Apellido']; ?>">
        <br><br>
    </div>
    <div class= "datos-alumno">
        <label for="tel">Ingresar Teléfono:</label>
        <input type="text" placeholder="Número" name="tel" id="tel" value="<?php echo $alumno['Teléfono']; ?>">
        <br><br>
    </div>
    <div class= "datos-alumno">
        <label for="email">Ingresar Email:</label>
        <input type="text" placeholder= name@unid.com" name="email" id="email" value="<?php echo $alumno['Email']; ?>">
        <br><br>
    </div>
    <div class= "datos-alumno">
        <label for="lic">Ingresar Licenciatura:</label>
        <input type="text" placeholder="Licenciatura" name="lic" id="lic" value="<?php echo $alumno['Licenciatura']; ?>">
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
        <input type="text" placeholder="ESTATUS" name="sts" id="sts" value="<?php echo $alumno['Estatus']; ?>">
        <br><br>
    </div>

        <input type="submit" name="submit" value="Actualizar">

    </form>
</body>
</html>