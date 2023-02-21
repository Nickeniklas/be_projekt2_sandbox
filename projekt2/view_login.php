<!-- Vy delen -->

<h2>Login</h2>
<p>Logga in eller registrera</p>

<form action="index.php" method="GET">
  Användarnamn: <input type="text" name="username"><br>
  Lösenord: <input type="password" name="password"><br>
  <input type="submit" value="Logga in">
</form> 

<?php include "./model_login.php"?>

<!-- Printa annonserna vettigt -->