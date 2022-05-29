<?php 
require('../config.php');
$cin=$_REQUEST["cin"];
$name=$_REQUEST["name"];
$date=$_REQUEST["date"];
$adress=$_REQUEST["adress"];
$last_name=$_REQUEST["last_name"];
$phone=$_REQUEST["phone"];
$email=$_REQUEST["email"];
$date_emb=$_REQUEST["date_emb"];
$query=('INSERT INTO `enseignant`(cin,prenom,nom,email,date_nais,tel,adresse,date_embch) VALUES (?,?,?,?,?,?,?,?)');

$conn->prepare($query)->execute([$cin,$last_name,$name,$email,$date,$phone,$adress,$date_emb]);
header("Location: newEnsg.php");


?>