<?php

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
echo "Connected successfully 03";

$echoArray=array();
$paradeDate=$_POST['paradeDate'];
$paradeCoy=$_POST['paradeCoy'];
$paradeHtml=$_POST['paradeHtml'];
$paradeJson=$_POST['paradeJson'];

// $paradeDate="2018-1-1";
// $paradeCoy="D";
// $paradeHtml="new";
// $paradeJson="new";


//check if date and coy exists
 //insert new row
	 //$sql = "INSERT INTO parade (paradeDate, paradeCoy, paradeHtml,paradeJson) VALUES "."( '".$paradeDate."',".  "'".$paradeCoy."',".  "'".$paradeHtml."'," . "'".$paradeJson."')";
$sql=sprintf("INSERT INTO parade (paradeDate, paradeCoy, paradeHtml,paradeJson) VALUES('%s', '%s', '%s',\"%s\")",$paradeDate,,$paradeCoy,$paradeHtml,$paradeJson);
if(mysqli_query($conn, $sql))
{
    echo "Records inserted successfully.";
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}	 
mysqli_close($conn);
//echo json_encode($echoArray);
?>
