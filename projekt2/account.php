<?php include "handy_methods.php" ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My account</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">

        <!-- Logo och huvudmeny -->
        <?php include "header.php" ?>

        <!-- UPDATE PROFILE -->
        <article>
            <?php include "./view_account.php"; ?>
            <div class="spaceLine"></div>        
        </article>

        <!-- COMMENT SECTION -->
        <article>
            <?php include "./view_comments.php"; ?>
            <div class="spaceLine"></div>        
        </article>
        
        <footer>
            Not by Dennis<sup>&#169;</sup>
        </footer>
    </div>
</body>

</html>