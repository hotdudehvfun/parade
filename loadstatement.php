<?php

// error_reporting(E_ALL);
// ini_set('display_errors', '1');

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
//echo "Connected successfully 01";

$echoArray=array();
//$paradeDate=$_POST['paradeDate'];
//$paradeCoy=$_POST['paradeCoy'];

$paradeDate="2018-9-1";
$paradeCoy="A";
// $paradeHtml="new";
// $paradeJson="new";
//check if date and coy exists

$sql="SELECT * FROM parade WHERE paradeDate="."'".$paradeDate."'" ." AND paradeCoy="."'".$paradeCoy."'";
$result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0)
 {

 		//parade statement found
 		$row=mysqli_fetch_row($result);
 		$echoArray['row']=($row);
 		$echoArray['success_msg']="Parade statement loaded successfully!!!";
		$echoArray['success']=true;	
}else
{
	$echoArray['success_msg']="Parade statement could not be found!!!";
	$echoArray['success']=false;	
}
mysqli_close($conn);
echo json_encode($echoArray);
?>
