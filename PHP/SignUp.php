<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>SIGNUP</title>
        </head>
        <body>

        <div class="row">

            <div class = "col-md-3">

                <button type="button" class="btn btn-dark"><a href="../index.php"> HOME </a></button>

            </div>

        </div>
    </body>
</html>

<?php

    include_once 'BDD.php';




        if (isset($_POST['username']) && isset($_POST['password'])) {

                $username = $_POST['username'];
                $password = $_POST['password'];

                 $requete = "INSERT INTO USERS (username, password) VALUES (?,?)";
                 $query = $pdo->prepare($requete);
         
                 $query->bindValue(1, $username, PDO::PARAM_STR);
                 $query->bindValue(2, $password, PDO::PARAM_STR);
               
                 $query->execute();

                header ('location: loginForm.php');
            }
        else {
            echo 'Les variables du formulaire ne sont pas déclarées.';
        }

?>