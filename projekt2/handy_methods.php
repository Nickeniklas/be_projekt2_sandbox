<?php
// Starta en session för att användaren ska kunna
// "hållas" inloggad trots att den inte skickar
// username och password till servern varje refresh
session_start();

// En funktion som tar bort whitespace med trim,
// backkslashes (escape char), och konverterar 
// eventuella skadliga html tecken som < eller > 
// till deras html representationer &lt;script&gt;
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//databas config
//lösenord i separat fil
$servername = "localhost";
$dbname = "savonhen";
$username = "savonhen";
include "hemlis.php";

//bättre felsökning
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//contructor method, mysqli objekt
$conn = new mysqli($servername, $username, $password, $dbname);
$pdoconn =  new PDO("mysql:host=$servername;dbname=$dbname; charset=UTF8", $username, $password);
$pdoconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

// Check connection  
//om variabeln $conn innehåller metoden, egenskap, funktioner eller parametrar med namnet "connect_error" 
//eftersom En klass innehåller objekt, vilka i sin tur kan ha olika metoder, egenskaper, funktioner eller parametrar.
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connection Successful";
?>
