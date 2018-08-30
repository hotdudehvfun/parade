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
// echo "Connected successfully";

$echoArray=array();

$paradeDate=$_POST['paradeDate'];
$paradeCoy=$_POST['paradeCoy'];
$paradeHtml=$_POST['paradeHtml'];
$paradeJson=$_POST['paradeJson'];

$sql = "INSERT INTO parade (paradeDate, paradeCoy, paradeHtml,paradeJson) VALUES "."( '".$paradeDate."',".  "'".$paradeCoy."',".  "'".$paradeHtml."'," . "'".$paradeJson."')";

if ($conn->query($sql) === TRUE)
{
	$echoArray['success_msg']="Parade statement successfully sent!!!";
	$echoArray['success']=true;
} else
{
    $echoArray['error_msg']="Error: " . $sql . "<br>" . $conn->error;
    $echoArray['success']=false;
}
$conn->close();
echo json_encode($echoArray);
?>
