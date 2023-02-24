<?php
if (!empty($_REQUEST['user']) && !empty($_REQUEST['pass'])) {
    $user = test_input($_REQUEST['user']);
    $pass = test_input($_REQUEST['pass']);
    
    //SQL statement
    $sql = "SELECT username,password FROM profiles WHERE username=? AND password =?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user, $pass);

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            print("Användarnmn och lösenord korrekt!");
            $_SESSION['name'] = $user;
            print("<h3>Ditt användarnamn har sparats i SESSION<br>namn: ". $_SESSION['name'] . "</h3>");
        } else {
            print("Du har matat in felaktiga logins. Försök pånytt eller BE GONE!");
        }
    } 
} else {
        print("Fyll in både användarnamn och lösenord!");
    }
