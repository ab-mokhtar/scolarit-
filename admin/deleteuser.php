<?php
require('../config.php');
$id=$_POST["id"];
$query=("update users set actif = 0 where id= ?");

$conn->prepare($query)->execute([$id]);
header("Location: registre.php");

?>