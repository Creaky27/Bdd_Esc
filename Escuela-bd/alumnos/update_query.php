<?php
require_once("../Lib/functions.php");
 
$name = $_POST['name'];
$apll = $_POST['apll'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$lic = $_POST['lic'];
$cuat = $_POST['cuat'];
$sts = $_POST['sts'];
$ID = $_POST['id'];



update_alumnos($name, $apll, $tel, $email, $lic, $cuat, $sts, $ID);

header("Location: index.php");
?>