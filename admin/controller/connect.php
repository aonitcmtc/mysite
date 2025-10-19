<?php
//php version 8 
$servername = "localhost";
$username = "user01";
$password = "User01!**";
$db = "myphpserver";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>