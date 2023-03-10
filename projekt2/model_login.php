<?php
if (!empty($_REQUEST['user']) && !empty($_REQUEST['pass'])) {
    $user = test_input($_REQUEST['user']);
    $pass = test_input($_REQUEST['pass']);
    
    //SQL statement
    $sql = "SELECT username,password, id FROM profiles WHERE username=? AND password =?";

    $stmt = $pdoconn->prepare($sql);
    
    if ($stmt->execute([$user,$pass])) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($result) {
            print("Användarnamn och lösenord korrekt!");
            $_SESSION['receiverID']=$result['id']; // ID TILL KOMMENTARS FUNKTIONALITET
            $_SESSION['name'] = $user;
            print("<h3>Ditt användarnamn har sparats i SESSION<br>namn: ". $_SESSION['name'] . "<br> Du blir automatiskt skickad till din profil om 3 sekunder.</h3>");
            header("Refresh:3; url=account.php");
        } else {
            print("Du har matat in felaktiga logins. Försök pånytt eller BE GONE!");
        }
    } 
} else {
        print("Fyll in både användarnamn och lösenord!");
    }
