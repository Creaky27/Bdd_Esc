<?php
require_once("../Lib/functions.php");
 
$ID = $_POST['ID'];
$MATERIA = $_POST['Nombre_Materia'];
$cuat = $_POST['cuat'];
$lic = $_POST['lic'];


update_materias($ID, $MATERIA, $cuat, $lic);

header("Location: index_2.php");
?>