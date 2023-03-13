<?php
$user = $_SESSION['name'];
$receiverID = $_SESSION['receiverID'];  // MAKES SENSE NÄR MAN SKRIVER UT

$sql = "SELECT message, sender FROM Comments WHERE receiver=?";  
$stmt=$pdoconn->prepare($sql);
$stmt->execute([$receiverID]);

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
    <p> <?= $row['sender'] ?> Commented: <?= $row['message'] ?> </p>
<?php } ?>