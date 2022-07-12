<?php
require_once("../Lib/functions.php");

$name = $_POST['name'];
$apll = $_POST['apll'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$sts = $_POST['sts'];

insert_profesor($name, $apll, $tel, $email, $sts);

header ("Location:index_3.php")
?>