<?php
    session_start([
        'cookie_lifetime' => 86400,
    ]);
    $email = $_POST['email'];
    $userPassword = $_POST['password'];

    
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

$result = $conn->query("SELECT password FROM user where email ='". $email."'"); 

// Check ob es Erg  ebnisse in der Abfrage gab
if ($result->num_rows > 0) {
    //Nehme das erste Ergebnis aus der SQL Abfrage
    $hashed_password = $result->fetch_assoc()['password'];
    
    if ( password_verify($userPassword, $hashed_password) ) {
    // Passwort war richtig.
        if( password_needs_rehash($hashed_password, PASSWORD_DEFAULT) ) {
            /*  Der Hashalgorithmus des gespeicherten Passworts genügt nicht mehr
            *  den aktuellen Anforderungen, daher sollte es mittels password_hash()
            *  neu gehasht und anstelle des alten Hashes in der Datenbank gespeichert
            *  werden; hier wird es nur in der entsprechenden Variable geändert:
            */
            $hashed_password = password_hash($userPassword,  PASSWORD_DEFAULT);
            // ToDo: neu gehashtes Passwort in DB speichern!
        }

        //Session für Nutzer erstellen
        $_SESSION['user_mail'] = $email; 

        //Weiterleitung
        echo "LOGIN ERFOLGREICH";
    } else {
    // Passwort war falsch.
    // Zurück mit Fehlermeldung
    header('Location: ../login.php?password=false');
    exit();
    }
}else{
    // EMail war falsch.
    header('Location: ../login.php?username=1');
    exit();
}
