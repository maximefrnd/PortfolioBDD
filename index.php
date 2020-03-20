<?php

include_once 'PHP/BDD.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <Meta charset = "utf-8">
        <title>Mon Portfolio</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <div class="spacer">
        </div>

        <div class="row">

            <div class="col-md-6">
                <h1> Bienvenue ! </h1>
            </div>

            <div class="col-md-6">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-dark"><a href="PHP/LoginForm.php"> LOGIN </a></button>
                <button type="button" class="btn btn-dark"><a href="PHP/SignUpForm.php"> SIGNUP </a></button>
            </div>
            </div>

        </div>
        
        <div class="spacer"></div>

        <div class="row">

            <div class = "col-md-3">

                <button type="button" class="btn btn-dark"><a href="PHP/addWork.php"> AddWork </a></button>

            </div>

        </div>
        

        <?php
            $requete = "SELECT * FROM WORK";
            $stmt = $pdo->prepare($requete);
            $stmt->execute();
            while($obj = $stmt->fetch()) {
        ?>

        <img class="img" src="<?php echo($obj[1]); ?>"><img>
        </br>
        <h3 class="name"> <?php echo($obj[2]); ?> </h3>
        </br>
        <p class="description"> <?php echo($obj[3]); ?> </p>
        <div class="spacer"></div>



        <?php
            }

        ?>

        

    </body>
</html>