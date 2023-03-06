<?php 
$profile = test_input($_REQUEST['profile']);
$sql = "SELECT username, realname, bio FROM profiles WHERE username=?";
$stmt = $pdoconn->prepare($sql);
$stmt->execute([$profile]);
$row = $stmt->fetch(PDO::fetch_assoc);
?>

<?php if($row = $stmt->fetch(PDO::fetch_assoc)): ?>
<div>                          
    <p>Profilen för användaren: <?= $row['username']?>;</p>
    <p>Bio: <?= $row['bio']?>;</p>
</div>
<?php endif; ?>


