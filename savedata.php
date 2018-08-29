<?php
$servername = "den1.mysql6.gear.host:3306";
$username = "mydb40";
$password = "123456#";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error)
{
     
echo "problem with connection";
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";



print_r(json_decode($_POST));
//insert into parade (paradeDate,paradeCoy,paradeHtml,paradeJson) values("2018-1-1","a","html","json");

// $stmt=$conn->prepare("insert into parade (paradeDate,paradeCoy,paradeHtml,paradeJson) values(?,?,?,?)");
// $stmt->bind_param("ssss", $paradeDate, $paradeCoy, $paradeHtml,$paradeJson);
// $paradeDate = $_POST['paradeDate'];
// $paradeCoy = $_POST['paradeCoy'];
// $paradeHtml = $_POST['paradeHtml'];
// $paradeJson = $_POST['paradeJson'];
// $stmt->execute();

// $result=$stmt->affected_rows;
// $stmt->close();
// $conn->close();
// echo "Affected rows:".$result;
?>
