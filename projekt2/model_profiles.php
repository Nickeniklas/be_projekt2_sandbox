<?php
$sql = "SELECT * FROM profiles";

$result = $conn->query($sql); //query metoden av mysqli objektet returnerar mysqli_result objektet
print($result->num_rows);//(printar ut en 1) mysqli_reslut objektet har en egenskap som heter num_rows

//UNPREPARATIONSES!!!!!!!
if($result->num_rows > 0){
    while($row = $result->fetch_assoc())
    print("<h3>Användar namn: " . $row['username']."</h3>");
}