<header>
    <!-- Logo och meny i headern -->
    <img src="../media/logo.svg" alt="Website logo" />
    <div id="logo">BBdatingV2</div>

    <nav>
        <!-- Huvudmenyn -->
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="../projekt1/">Projekt 1</a></li>
            <li><a href="../projekt2/">Projekt 2</a></li>
            <li><a href="../rapport/">Rapport</a></li>
            <!-- Visa profilsidan om man är inloggad -->
            <?php
              if (isset($_SESSION['name'])) {
                  // Visa länken till profilsidan om man är inloggad
                  print("<li><a href='./account.php'> " . $_SESSION['name']. "</a></li>");
              }
            ?>
        </ul>
    </nav>
</header>