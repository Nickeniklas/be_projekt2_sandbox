<?php include "handy_methods.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBdatingV2</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <?php include "header.php" ?> <!-- Logo och huvudmeny -->
        <article>
            <h1>BBdatingV2</h1>
            <div class="spaceLine"></div>
            <?php include "./view_Profiles.php";?>
            <!-- Annonsvyn -->
            <div class="spaceLine"></div>        
        </article>
        
        <article>
            <?php if(!isset($_SESSION['name'])){
                include "./view_login.php";
            }else {
                echo "You're signed in.";
            }
            ?>
            <div class="spaceLine"></div>
        </article>

        <article>
            <h1>Title</h1>
            <p>waiting for text.</p>
            <div class="spaceLine"></div>
        </article>
        
        <footer>
            Not by Dennis<sup>&#169;</sup>
        </footer>
    </div>
</body>

</html>