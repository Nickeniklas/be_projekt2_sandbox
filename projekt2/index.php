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

         <!-- Logo och huvudmeny -->
        <?php include "header.php" ?>

        <article>
            <h1>BBdatingV2</h1>
            <div class="spaceLine"></div>

            <!-- ANNONSERNA -->
            <?php if (!empty($_REQUEST['profile'])){
                include "./view_ad.php";
            }else {
                include "./view_Profiles.php";
            }
             ?>
            <div class="spaceLine"></div>        
        </article>
        
        <!-- LOGIN or REGISTER -->
        <article>
            <?php if(!isset($_SESSION['name'])){
                include "./view_login.php";
            }else {
                echo "<h2>You're signed in.</h2>";
            }
            ?>
            <div class="spaceLine"></div>
        </article>

            <!-- NEW ARTICLE -->
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