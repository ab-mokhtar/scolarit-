<?php
// Informations d'identification
$DB_SERVER= 'mysql:localhost';
$DB_USERNAME= "root";
$DB_PASSWORD= "";
$DB_NAME="projet_web";
 
// Connexion à la base de données MySQL 
$conn = new PDO("mysql:dbname=projet_web;host=localhost", "root","");
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>