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
$paradeDate=$_POST['paradeDate'];
$paradeCoy=$_POST['paradeCoy'];
$paradeHtml=$_POST['paradeHtml'];
$paradeJson=$_POST['paradeJson'];

$echoArray['json']=$paradeJson;

// $paradeDate="2018-1-1";
// $paradeCoy="D";
// $paradeHtml="new";
// $paradeJson="new";


//check if date and coy exists

$sql="SELECT * FROM parade WHERE paradeDate="."'".$paradeDate."'" ." AND paradeCoy="."'".$paradeCoy."'";
$result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0)
 {

 		//update row
 		$sql = "UPDATE parade SET ";
		$sql.=" paradeDate="."'".$paradeDate."'";
		$sql.=" ,paradeCoy="."'".$paradeCoy."'";
		$sql.=" ,paradeHtml="."'".$paradeHtml."'";
		$sql.=" ,paradeJson="."'".$paradeJson."'";
		$sql.=" WHERE ";
		$sql.=" paradeDate="."'".$paradeDate."'";
		$sql.=" AND ";
		$sql.=" paradeCoy="."'".$paradeCoy."'";
		$updateStatus = mysqli_query($conn, $sql);
		if ($updateStatus)
		{
			$echoArray['success_msg']="Parade statement updated successfully!!!";
			$echoArray['success']=true;
		}else
		{
			$echoArray['success_msg']="Parade statement could not be updated!!!";
			$echoArray['success']=false;
		}
}else
	{
	 //insert new row
	 //$sql = "INSERT INTO parade (paradeDate, paradeCoy, paradeHtml,paradeJson) VALUES "."( '".$paradeDate."',".  "'".$paradeCoy."',".  "'".$paradeHtml."'," . "'".$paradeJson."')";
	 $sql="INSERT INTO parade (paradeDate, paradeCoy, paradeHtml,paradeJson) VALUES('$paradeDate', '$paradeCoy', '$paradeHtml','$paradeJson')";
	$result = mysqli_query($conn, $sql);
	 $echoArray["result"]=$result;
			if (mysqli_num_rows($result)>0)
			{
				$echoArray['success_msg']="Parade statement sent successfully!!!";
				$echoArray['success']=true;
			}else
			{
				$echoArray['success_msg']="Parade statement could not be sent!!!";
				$echoArray['success']=false;
			}
	 }
mysqli_close($conn);
echo json_encode($echoArray);
?>
