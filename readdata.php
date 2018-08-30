<?php
$servername = "den1.mysql6.gear.host";
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
echo "Connected successfully 1 </br>";

$sql = "SELECT * FROM parade";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "date" . $row["paradeDate"]. " Coy: " . $row["paradeCoy"]. "html" . $row["paradeHtml"]. "json" . $row["paradeJson"]. "<br>";
    }
} else {
    echo "0 results";
}



$conn->close();

?>
