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
    <title>Inscripción Alumnos</title>
</head>
<body>
    <h1>Ingrese Nueva Materia <small><a href="../materias/index_2.php">Regresar</a></small></h1>
    <form action = "update_query.php" method= "post">
    <div class= "datos-materia">
        <label for="ID">Ingresar ID:</label>
        <input type="text" placeholder="ID" name="ID" id="ID" value="<?php echo $materia['ID']; ?>">
        <br><br>
    </div>
    <div class= "datos-materia">
        <label for="MATERIA">Ingrese Materia:</label>
        <input type="text" placeholder="Materia" name="MATERIA" id="MATERIA" value="<?php echo $materia['Nombre_Materia']; ?>">
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
        <input type="text" placeholder="Licenciatura" name="lic" id="lic" value="<?php echo $materia['Licenciatura']; ?>">
        <br><br>
    </div>
        <input type="submit" name="submit" value="Actualizar">

    </form>
</body>
</html>