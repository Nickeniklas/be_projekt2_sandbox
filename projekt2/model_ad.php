<?php
$profile = test_input($_REQUEST['profile']);
$sql = "SELECT username, realname, bio, likes FROM profiles WHERE username=?";
$stmt = $pdoconn->prepare($sql);
$stmt->execute([$profile]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
print("<div class='profileAD'>Profile for user: <strong>" . $row['realname'] . "</strong>");
print("<p>" . $row['username'] . " berättar om sig själv: " . $row['bio'] . "</p>");
print("<p>total likes: " . $row['likes'] . " </p>");

//include "placecomment.php";

?>
<form action="index.php?profile=<?= $_SESSION['name'] ?>" method="post">
    <input type="text" placeholder="Comment" name="comment" />
    <input type="submit" name="submitComment" value="Place Comment" />
</form>
<?= "</div>";

$sql = "SELECT profiles.id, profiles.username, Comments.message FROM profiles INNER JOIN Comments ON profiles.id = Comments.receiver ";

$stmt = $pdoconn->query($sql);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if ($result) {
    //var_dump($result);
    $id = NULL;
    $sender = $_SESSION['receiverID']; // MAKES NO SENSE HERE <--
    $receiver = $result['id'];
    $msg = $_REQUEST['comment'];
    if (isset($_REQUEST['submitComment'])) {
        $msg = $_REQUEST['comment'];
        $sql = "INSERT INTO Comments (id, sender, receiver, message) VALUES (?, ?, ?, ?)";
        $stmt = $pdoconn->prepare($sql);
        $stmt->execute([$id, $sender, $receiver, $msg]);
    };
}

?>