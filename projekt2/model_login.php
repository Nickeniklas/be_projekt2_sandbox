<?php 
if(!empty($_REQUEST['username']) && !empty($_REQUEST['password'])){
    $username = test_input($_REQUEST['username']); //samma php variabel som användes i conn (ok men inte i framtiden)
    

    $sql = "SELECT username,password FROM profiles WHERE username=? AND password =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username,$password);

    if($stmt->execute() && $stmt->$num_rows > 0) {
        print("Användarnmn och lösenord korrekt!");
    }
    else {
        print("Du har matat in felaktiga logins. Försök pånytt eller BE GONE!");
    }
}