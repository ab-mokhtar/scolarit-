<?php 
require('../config.php');
$module=$_POST["module"];
$classe=$_POST["id"];
$ens=$_POST["ensei"];

$query=('INSERT INTO `affectation`(id_ensei,id_classe,id_mod) VALUES (?,?,?)');

$conn->prepare($query)->execute([$ens,$classe,$module]);
header("Location: affectation.php");


?>