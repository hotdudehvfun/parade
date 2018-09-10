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

$type=$_POST['type'];
$text=$_POST['text'];
$image=$_POST['image'];
$time=$_POST['time'];
$username=$_POST['username'];

	//insert new row
$sql = "INSERT INTO status (type, text, image,time,username) VALUES "."( '".$type."',".  "'".$text."',".  "'".$image."'," . "'".$time."',"."'".$username."')";
	$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result)>0)
			{
				$echoArray['success_msg']="Status posted!!!";
				$echoArray['success']=true;			
			}else
			{
				$echoArray['success_msg']="Status could not be posted!!!";
				$echoArray['success']=true;
			}
mysqli_close($conn);
echo json_encode($echoArray);
?>
