<?php
$servername = "den1.mysql6.gear.host:3306";
$username = "mydb40";
$password = "123456#";
$db = "mydb40";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (mysqli_connect_errno())
{
    die("Connection failed: " .mysqli_connect_errno());
} 
echo "Connected successfully";


try
{
	echo "sql try";
	// $paradeDate = $_POST['paradeDate'];
	// $paradeCoy = $_POST['paradeCoy'];
	// $paradeHtml = $_POST['paradeHtml'];
	// $paradeJson = $_POST['paradeJson'];
	//insert into parade (paradeDate,paradeCoy,paradeHtml,paradeJson) values("2018-1-1","a","html","json");

	// $stmt=$conn->prepare("insert into parade (paradeDate,paradeCoy,paradeHtml,paradeJson) values(?,?,?,?)");
	mysqli_query($con,"SELECT * FROM parade");
	echo "Affected rows: " . mysqli_affected_rows($con);
	mysqli_close($con);
}catch(Exception $e)
{
	  echo 'Message: ' .$e->getMessage();
}
?>
