<?php
require_once("../Lib/functions.php");
 
$ID = $_POST['ID'];
$mat = $_POST['Materia'];
$cuat = $_POST['cuat'];
$lic = $_POST['lic'];


update_materias($ID, $mat, $cuat, $lic);

header("Location: index_2.php");
?>