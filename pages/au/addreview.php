<?php
session_start();
if(!isset($_SESSION['user_name'])){
    header('Location: ../login.html');
    exit();
}

$ku_name = $_POST['Kursname'];
$lk1 = $_POST['LK'][0];
$lk2 = $_POST['LK'][1];
$us_name = $_SESSION['user_name'];
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

$result = $conn->query("SELECT * FROM kurswahl WHERE name = '{$ku_name}'");
if($result->num_rows > 0){
    header('LOCATION: neuekurswahl.php?name=1');
    exit();
}

$conn->query("INSERT INTO kurswahl (name) VALUES ('{$ku_name}')");
$conn->query("INSERT INTO erstellen (username,kurswahl_name) VALUES ('{$us_name}','{$ku_name}')");
$conn->query("INSERT INTO besteht (kurswahl_name,subject_name) VALUES ('{$ku_name}','{$lk1}')");
$conn->query("INSERT INTO besteht (kurswahl_name,subject_name) VALUES ('{$ku_name}','{$lk2}')");

header('Location: gkKurswahl.php');
exit();