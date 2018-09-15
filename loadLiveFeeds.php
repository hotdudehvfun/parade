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

$sql="SELECT * FROM feeds WHERE state=true";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
 {
 		// Fetch one and one row
 		$feeds=array();
  		while ($row=mysqli_fetch_row($result))
    	{
    		//id type text image time
    		array_push($feeds, $row);
    	}	
	 	mysqli_free_result($result);
 		
 		$echoArray['feeds']=$feeds;
 		$echoArray['success_msg']="Loading feeds...";
		$echoArray['success']=true;	
}else
{
	$echoArray['success_msg']="Nothing to display...";
	$echoArray['success']=true;	
}
echo json_encode($echoArray);
?>
