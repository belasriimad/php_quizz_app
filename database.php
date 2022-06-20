<?php 
$db_host = 'localhost';
$db_database = 'quiz';
$db_user = 'root';
$db_pass='';

$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_database);

if($mysqli->connect_error){
    printf("connexion echouée : %s\n",$mysqli->connect_error);
    exit();
}
mysqli_query($mysqli,"SET NAMES 'utf8'");
