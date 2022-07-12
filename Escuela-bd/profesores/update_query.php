<?php
require_once("../Lib/functions.php");
 
$name = $_POST['name'];
$apll = $_POST['apll'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$sts = $_POST['sts'];
$ID = $_POST['ID'];

update_profesores($name, $apll, $tel, $email, $sts, $ID);

header("Location: index_3.php");