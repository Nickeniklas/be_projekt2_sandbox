<?php
$username = $_SESSION['name'];
$receiverID = $_SESSION['receiverID'];

$sql = "SELECT message, sender FROM Comments WHERE receiver=?";  
$stmt=$pdoconn->prepare($sql);
$stmt->execute([$receiverID]);

while($row = $stmt->fetch(PDO::fetch_assoc)) { ?>
    <p> <?= $row['sender'] ?> kommenterar: <?= $row['message'] ?> </p>
<?php } ?>