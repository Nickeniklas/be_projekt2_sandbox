<?php include "handy_methods.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBdatingV2 | HOME</title>
    <link rel="stylesheet" href="../style.css">
    <script src="./script.js" defer></script>
</head>

<body>
    <div class="container">
        <?php include "header.php" ?> <!-- Logo och huvudmeny -->
        <article>
            <h1>BBdatingV2</h1>
            <div class="blackLine"></div>
            <?php include "./view_Profiles.php";?>
            <!-- Annonsvyn -->
            <div class="blackLine"></div>        
        </article>
        
        <article>
            <?php include "./view_login.php";?>
            <div class="blackLine"></div>
        </article>

        <article>
            <?php include "./php.php";?>
            <div class="blackLine"></div>
        </article>
        
        <footer>
            Not by Dennis<sup>&#169;</sup>
        </footer>
    </div>
</body>

</html>