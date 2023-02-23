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
        } else {
            print("Du har matat in felaktiga logins. Försök pånytt eller BE GONE!");
        }
    }
}
