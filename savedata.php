<?php
$servername = "den1.mysql6.gear.host:3306";
$username = "mydb40";
$password = "123456#";
$db = "mydb40";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully 1";

$sql = "INSERT INTO parade (paradeDate, paradeCoy, paradeHtml,paradeJson)
VALUES ('2018-1-1', 'D', 'html','json')";

if ($conn->query($sql) === TRUE)
{
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>
