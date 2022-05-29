<?php 
require('../config.php');
$name=$_REQUEST["name"];
$last_name=$_REQUEST["last_name"];
$phone=$_REQUEST["phone"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$query=('INSERT INTO `users`(last_name,phone,name,email,password) VALUES (?,?,?,?,?)');

$conn->prepare($query)->execute([$last_name,$phone,$name,$email,$password]);
header("Location: newuser.php");


?>