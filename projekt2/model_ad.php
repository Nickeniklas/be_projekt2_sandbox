<?php 
$profile = test_input($_REQUEST['profile']);
$sql = "SELECT username, realname, bio, likes FROM profiles WHERE username=?";
$stmt = $pdoconn->prepare($sql);
$stmt->execute([$profile]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
print("<div class='profileAD'>Profile for user: <strong>" . $row['realname'] . "</strong>");
print("<p>".$row['username']." berättar om sig själv: ".$row['bio']."</p>");
print("<p>total likes: ".$row['likes']." </p>");
//include "placecomment.php";

?>
 <form action="index.php" method="get">
<input type="text" placeholder="Comment" name="comment"/>
<input type="submit" name="submitComment" value="Place Comment"/> 
</form>    
<?="</div>";

$id=NULL;
$sender=1;
$receiver=2;
$msg = $_GET['comment']; 
if(isset($_GET['submitComment'])){
    $msg = $_GET['comment'];  
    $sql = "INSERT INTO Comments (id, sender, receiver, message) VALUES (?, ?, ?, ?)";
    $stmt= $pdoconn->prepare($sql);
    $stmt->execute([$id, $sender, $receiver, $msg]);
};
?>



