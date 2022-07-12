<?php
require_once("../Lib/functions.php");
 
$ID = $_POST['ID'];
$mat = $_POST['mat'];
$cuat = $_POST['cuat'];
$lic = $_POST['lic'];


insertar_materias($ID, $mat, $cuat, $lic);

header("Location: index_2.php");
?>