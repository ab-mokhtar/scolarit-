<?php 
require('../config.php');
$id=$_POST["id"];
$note=$_POST["Note"];
$mod=$_POST["module"];
$date=$_POST["date"];

$query=('INSERT INTO `examen`(`id_etud`, `id_m`, `date_ex`, `note`) VALUES (?,?,?,?)');

$conn->prepare($query)->execute([$id,$mod,$date,$note]);
header("Location: Notes.php");


?>