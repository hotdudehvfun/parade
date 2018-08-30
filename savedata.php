<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$servername = "den1.mysql6.gear.host:3306";
$username = "mydb40";
$password = "123456#";
$db = "mydb40";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully 1";

$paradeDate='2018-2-2';
$paradeCoy='E';
$paradeHtml='helllo html';
$paradeJson='json hello';

$sql = "INSERT INTO parade (paradeDate, paradeCoy, paradeHtml,paradeJson) VALUES "."( '".$paradeDate."'".  "'".$paradeCoy."'".  "'".$paradeHtml."'" . "'".$paradeJson."')";

if ($conn->query($sql) === TRUE)
{
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>
