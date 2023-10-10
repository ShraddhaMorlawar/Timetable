<?php

$servername="localhost";
$username="root";
$password="";
$database="phpbatch";

$conn=new mysqli($servername, $username, $password, $database);

if($conn->connect_error)
{
die("connection error : ". $conn_error);
}
?>