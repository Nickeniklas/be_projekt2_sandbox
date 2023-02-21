<?php 
//printa ut viktigt information på kunder 
$conn1 = new mysqli($servername, $username, $password, $dbname);

if ($conn1->connect_error){
    die("Connection failed: " . $conn1->connect_error);
}
$stmt = $mysqli->prepare("SELECT bio FROM profiles WHERE salary=?");
$stmt->bind_param('i', $money);
$stmt->execute();
$stmt->bind_result($money);
$stmt->fetch_assoc
print ("HOUHOUHOU, jag är julgubben.");

