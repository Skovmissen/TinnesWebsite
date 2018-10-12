<?php
$servername = "172.20.61.45";
$username = "nsk";
$password = "NDa12JMDwm3";
$dbname = "NSKTEST";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$navn = $_GET['navn'];
$email = $_GET['email'];
$besked = $_GET['besked'];
$sql = "INSERT INTO kontakt (navn, email, besked) VALUES ('".$_GET['navn']."', '".$_GET['email']."', '".$_GET['besked']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	
	header('Location: index.html#kontakt?sendt'); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>