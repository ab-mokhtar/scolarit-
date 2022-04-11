<?php
require('config.php');
session_start();
if (isset($_POST['email'])){
  $username = stripslashes($_REQUEST['email']);
  $username = mysqli_real_escape_string($conn, $username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE email='$username' and password='$password'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if($rows==1){
    $_SESSION['username'] = $username;
    header("Location: Admin/dashboard.php");
  }else{
    echo"Le nom de utilisateur ou le mot de passe est incorrect.";
  }
}
?>