<form action="index.php" method="get">
<input type="text" placeholder="Comment" name="fuck"/>
<input type="submit" name="submitComment" value="Place Comment"/> 
</form>   
<?php
$msg = $_GET['fuck'];
print($msg); 
if(isset($_REQUEST['submitComment'])){
    $sql = "INSERT INTO Comments (id, sender, receiver, message) VALUES (NULL, 1 , 2, $msg)";
    $stmt= $pdoconn->prepare($sql);
    $stmt->execute();
    print("Comment has been added.");
}
?>