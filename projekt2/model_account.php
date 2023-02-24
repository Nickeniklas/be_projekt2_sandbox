<?php $username = $_SESSION['name'];
print("Welcome to your profile <b>" . $username . "</b>");

$sql = "SELECT * FROM profiles WHERE username =?";
$stmt = $pdoconn->prepare($sql);

try {
    $stmt->execute([$username]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
?>
    <form action="account.php" method="get">
        Fullname: <input type="text" name="fullname" value="<?= $result['realname'] ?>"><br>
        <input type=submit value="Uppdatera profil">
    </form>
<?php
} catch (PDOException $e) {
    echo "Something went wrong :/. Here is some information: " . $e->getMessage();
}

?>
<img src="../media/me2day.jpg">