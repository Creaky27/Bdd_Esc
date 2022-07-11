<?php
require_once("../Lib/functions.php");

$ID = $_GET['ID'];

delete_alumnos($ID);

header("Location: index.php");
?>