<?php
require_once("../Lib/functions.php");
 
$name_prof = $_POST['name_prof'];
$apll = $_POST['apll'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$lic = $_POST['lic'];
$cuat = $_POST['cuat'];
$sts = $_POST['sts'];

insertar_profesor($name, $apll, $tel, $email, $lic, $cuat, $sts);

header("Location: index_3.php");
?>