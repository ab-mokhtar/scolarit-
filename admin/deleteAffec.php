<?php
require('../config.php');
$id=$_POST["id"];
$id1=$_POST["id_mod"];
$id2=$_POST["id_classe"];
$query=("DELETE FROM `affectation` WHERE `id_ensei`=? AND`id_classe`=? AND`id_mod`=?");

$conn->prepare($query)->execute([$id,$id2,$id1]);
header("Location: affectation.php");

?>