<?php $username = $_SESSION['name'];
print("<p>Welcome to your profile <b>" . $username . "</b></p>");

$sql = "SELECT * FROM profiles WHERE username =?";                                                         //UPDATE PROFILE INFORMATION!!!!
$stmt = $pdoconn->prepare($sql);

try {
    $stmt->execute([$username]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
?><h3>UPDATE PROFILE INFORMATION: </h3>
    <form action="account.php" method="get">
        Fullname: <input type="text" name="fullname" value="<?= $result['realname'] ?>"/><br>
        Bio: <input class="largeInput" type="text" name="bio" value="<?= $result['bio'] ?>"/><br>
        <input type="submit" name="submitChanges" value="UPDATE PROFILE"/>
    </form>
<?php
$bio = $_GET['bio'];
$fullname = $_GET['fullname'];

} catch (PDOException $e) {
    echo "Something went wrong :/. Here is some information: " . $e->getMessage();
}


if(isset($_GET['submitChanges'])){  //BORDE ÄNNU CHECKA ATT RÄTT ANVÄNDARE SOM HAR RÄTTIGHETER BARA KAN UPDATERA $_SESSION['username']
    try{
       $sql = "UPDATE profiles SET bio=?, realname=? WHERE username =?";
        
    $stmt = $pdoconn->prepare($sql);
    $stmt->execute([$bio, $fullname, $username]);

    print("Your profile information will be updated shortly!");
    header("Refresh:3; url=account.php");
    }catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}
?>
<!--<img src="../media/me2day.jpg">-->