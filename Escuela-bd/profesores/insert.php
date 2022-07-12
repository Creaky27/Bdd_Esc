<?php
require_once("../Lib/functions.php");

$nameP = $_POST['nameP'];
$apllP = $_POST['apllP'];
$telP = $_POST['telP'];
$emailP = $_POST['emailP'];
$stsP = $_POST['stsP']

insert_profesor($nameP, $apllP, $telP, $emailP, $stsP);

header ("Location : ../profesores/index_3.php")
?>