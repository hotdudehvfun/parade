<?php
$servername = "den1.mysql6.gear.host:3306";
$username = "mydb40";
$password = "123456#";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
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
$stmt=$conn->prepare("insert into parade (paradeDate,paradeCoy,paradeHtml,paradeJson) values('2018-1-1','a','html','json')");
// $stmt->bind_param("ssss", $paradeDate, $paradeCoy, $paradeHtml,$paradeJson);
// $paradeDate = $_POST['paradeDate'];
// $paradeCoy = $_POST['paradeCoy'];
// $paradeHtml = $_POST['paradeHtml'];
// $paradeJson = $_POST['paradeJson'];
echo "executing".$conn;
$stmt->execute();
$result=$stmt->affected_rows;
$stmt->close();
$conn->close();
echo "Affected rows=".$result;

}catch(Exception $e)
{
	  echo 'Message: ' .$e->getMessage();
}
?>
