<?php
print_r($_POST);
$ku_name = $_POST['Kursname'];
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

$conn->query("INSERT INTO kurswahl (name) VALUES ('{$ku_name}')");
$conn->query("INSERT INTO erstellen (username,kurswahl_name) VALUES ('','{$ku_name}')");
$conn->query("INSERT INTO besteht (kurswahl_name,subject_name) VALUES ('{$ku_name}','{$lk1}')");
$conn->query("INSERT INTO besteht (kurswahl_name,subject_name) VALUES ('{$ku_name}','{$lk2}')");
