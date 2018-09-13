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

$sql="select * from status inner join users on status.username=users.username order by time desc;";
$result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0)
 {

 		// Fetch one and one row
 		$posts=array();
  		while ($row=mysqli_fetch_row($result))
    	{
    		//id type text image time
    		array_push($posts, $row);

    	}	
	 	mysqli_free_result($result);
 		
 		$echoArray['posts']=$posts;
 		$echoArray['success_msg']="Loading posts...";
		$echoArray['success']=true;	
}else
{
	$echoArray['success_msg']="Nothing to display...";
	$echoArray['success']=false;	
}
mysqli_close($conn);
echo json_encode($echoArray);
?>
