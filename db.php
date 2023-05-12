<?php
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'miniproject';

$conn = new mysqli($host, $user, $pass, $dbname);  
    ;print("Welcome to php");
if(!$conn->connect_error )  
{  
  die('Could not connect: ' . $conn->connect_error);  
}  
?>