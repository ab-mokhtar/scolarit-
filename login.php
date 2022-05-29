<?php
require('config.php');
session_start();
if (isset($_POST['email'])){
  $username =$_REQUEST['email'];
  $password = $_REQUEST['password'];
    $query = "SELECT * FROM `users` WHERE email='$username' and password='$password' and actif=1";
  $result =$conn->query($query);
  
  if($result->rowCount()>0){
    $_SESSION['username'] = $username;
    header("Location: Admin/dashboard.php");
  }else{
    echo"Le nom de utilisateur ou le mot de passe est incorrect.";
  }
}
?>