<!doctype html>

<html lang="fr">
    <head>

        <meta charset="utf-8">

        <title>LOGIN</title>
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

        if (isset($_SESSION['Connected']) && !empty($_SESSION['Connected'])) {
            $Connected = $_SESSION['Connected'];
        }
        else {
            $Connected = false;
        }
?>

        <form action="login.php" method="post">
        Username : <input type="text" name="login" class="form-control" placeholder="Username">
        <br />
        Password : <input type="password" name="pwd" class="form-control" placeholder="Password"><br />
        <input type="submit" value="Connexion">
        </form>
        <div class="spacer"></div>
        <form method="get" action="SignUpform.php">
        No account yet ?
        <br />
            <button type="submit" class="btn btn-dark">SignUp</button>
        </form>


    </body>
</html>