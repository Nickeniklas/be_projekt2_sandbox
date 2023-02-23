<!-- Vy delen -->

<h2>Login</h2>
<p>Logga in eller registrera</p>

<form action="index.php" method="GET">
  Användarnamn: <input type="text" name="user"><br>
  Lösenord: <input type="password" name="pass"><br>
  <input type="submit" value="Logga in">
</form> 

<?php include "./model_login.php"?>

<p>Inget konto? <a href="register.php">Registrera dig här</a></p>



<!-- Printa annonserna vettigt -->