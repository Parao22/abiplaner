<?php
print_r($_POST);
$lk1 = $_POST['LK'][0];
$lk2 = $_POST['LK'][1];
$servername = "localhost"; 
$username = "abiplaner"; 
$password = "Q1ShlM_abiplaner"; 
$dbname = "abiplaner"; 
// Create connection 

$conn = new mysqli($servername, $username, $password, $dbname); 

// Check connection 

if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
$sql = "INSERT INTO kurswahl (name, date_created, comment, choosen) VALUES ('$lk1','NULL','NULL','NULL')"; 
echo "<p>'Erfolg'</p>";