<?php

for($i=0;$i<10;$i++){
    $sql = "SELECT * FROM profiles WHERE id=$i"; 

    if ($result = $conn->query($sql)){
        while ($row = $result->fetch_assoc()) {
            if($_SESSION['name']){      //användern måste logga in för att se annonserna.
                print("<a href='index.php'><div class='profileAD'>");
                print("<h3>". $row['realname']."</h3>");
                print("<p>".$row['username']." berättar om sig själv: ".$row['bio']."</p>");
                print("<p>total likes:".$row['likes']." </p>");
                print("</div></a>");
            }
    }
    }
    
}
