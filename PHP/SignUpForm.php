<!doctype html>

<html lang="fr">
    <head>

        <meta charset="utf-8">

        <title>SIGNUPFORM</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">

    </head>

    <body>

        <div class="row">

            <div class = "col-md-3">

                <button type="button" class="btn btn-dark"><a href="../index.php"> HOME </a></button>

            </div>

        </div>
        <div class="spacer"></div>
        <div class="spacer"></div>
        <div class="spacer"></div>

        <?php

            include_once 'BDD.php';

        ?>

        <form action="SignUp.php" method="post">
            <br />
            Username: <input type="text" name="username" class="form-control" placeholder="Username">
            <br />
            Password: <input type="password" name="password" class="form-control" placeholder="Password">
            <br />
            
            <button type="button" class="btn btn-light"><input type="submit" value="Connexion"></button>
        </form>


    </body>
</html>