<?php 
require('../config.php');
$cin=$_REQUEST["cin"];
$name=$_REQUEST["name"];
$date=$_REQUEST["date"];
$adress=$_REQUEST["adress"];
$last_name=$_REQUEST["last_name"];
$phone=$_REQUEST["phone"];
$email=$_REQUEST["email"];
$niv=$_REQUEST["Classe"];
$query=('INSERT INTO `etudiants`(cin,prenom,nom,email,date_nais,tel,adresse,classe) VALUES (?,?,?,?,?,?,?,?)');

$conn->prepare($query)->execute([$cin,$last_name,$name,$email,$date,$phone,$adress,$niv]);
header("Location: newEtudiant.php");


?>