<?php
$servername = "den1.mysql6.gear.host:3306";
$username = "mydb40";
$password = "123456#";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>