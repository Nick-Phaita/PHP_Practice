<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);  //Procedural method

//$conn = new mysqli($servername, $username, $password); // OOP method
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}echo "Connected successfully";


?>