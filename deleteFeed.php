<?php 
// open and load a XML file
error_reporting(E_ALL);
ini_set('display_errors', '1');

$servername = "den1.mysql6.gear.host:3306";
$username = "mydb40";
$password = "123456#";
$db = "mydb40";

// Create connection
 $conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn)
{
    die("Connection failed: " . $conn->connect_error);
}

$id=$_POST["id"];
$sql="delete from feeds where id=".$id;
$result = mysqli_query($conn, $sql);
if ($result)
{
	$echoArray['success']=true;			
}else
{
	$echoArray['success']=false;
}
echo json_encode($echoArray);
?>
