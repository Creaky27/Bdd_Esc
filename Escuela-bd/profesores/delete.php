<?php
require_once("../Lib/functions.php");

$ID = $_GET['ID'];

delete_profesores($ID);

header("Location: index_3.php");
?>