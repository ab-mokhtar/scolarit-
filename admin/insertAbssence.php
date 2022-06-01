<?php 
require('../config.php');
$id=$_POST["id"];
$mod=$_POST["module"];
$date=$_POST["date"];

$query=('INSERT INTO `absence`(id_etud,id_m,date) VALUES (?,?,?)');

$conn->prepare($query)->execute([$id,$mod,$date]);
header("Location: abssence.php");


?>