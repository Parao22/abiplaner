<?php
$email = $_POST['email'];
$userPassword = $_POST['password'];
$userUsername = $_POST['username'];
//echo 'email: '.$email."<br>".'password: '.$password."<br>".'username: '.$username;


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
$hashed_password = password_hash($userPassword,  PASSWORD_DEFAULT);
$sql = "INSERT INTO user (email,password,username)
VALUES ('$email','$hashed_password','$userUsername')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

