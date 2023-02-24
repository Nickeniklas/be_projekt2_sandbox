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
        <?php include "header.php" ?> <!-- Logo och huvudmeny -->
        <article>
            <?php include "./view_account.php"; ?>
            <div class="blackLine"></div>        
        </article>
        
        <footer>
            Not by Dennis<sup>&#169;</sup>
        </footer>
    </div>
</body>

</html>