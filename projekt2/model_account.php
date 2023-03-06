<?php $username = $_SESSION['name'];
print("<p>Welcome to your profile <b>" . $username . "</b></p>");

$sql = "SELECT * FROM profiles WHERE username =?";
$stmt = $pdoconn->prepare($sql);

try {
    $stmt->execute([$username]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
?><p>Här kan du uppdatera din profils information: </p>
    <form action="account.php" method="get">
        Fullname: <input type="text" name="fullname" value="<?= $result['realname'] ?>"/><br>
        Bio: <input class="largeInput" type="text" name="bio" value="<?= $result['bio'] ?>"/><br>
        <input type="submit" name="submitChanges" value="Submit"/>
    </form>
<?php
$bio = $_GET['bio'];
$fullname = $_GET['fullname'];

} catch (PDOException $e) {
    echo "Something went wrong :/. Here is some information: " . $e->getMessage();
}


if(isset($_GET['submitChanges'])){
    try{
       $sql = "UPDATE profiles SET bio=?, realname=? WHERE username =?";
        
    $stmt = $pdoconn->prepare($sql);
    $stmt->execute([$bio, $fullname, $username]);

    print("Your profile information will be updated shortly!");
    //header("refresh:5");
    
    }catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    
}
?>
<!--<img src="../media/me2day.jpg">-->