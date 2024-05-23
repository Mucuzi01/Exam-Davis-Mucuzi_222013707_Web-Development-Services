<?php
//connection details
$host="localhost";
$user="root";
$pass="";
$database="davis";
// creating connection
$connection=new mysqli($host,$user,$pass,$database);
//check connection
if($connection->connect_error){
    die("connection failed: ".$connection->connect_error);
}
?>