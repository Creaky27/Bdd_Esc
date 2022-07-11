<?php
require_once("../Lib/functions.php");

$ID = $_GET['ID'];

delete_materias($ID);

header("Location: index_2.php");
?>