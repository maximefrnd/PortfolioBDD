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

        <?php

            include_once 'BDD.php';

                

            if (isset($_POST['login']) && isset($_POST['pwd'])) {

                $requete = "SELECT * FROM USERS WHERE 1";
                $query = $pdo->prepare($requete);
                $obj = $pdo->query ($requete);

                foreach ($obj as $key => $array) {
                        $valid_name = $array[1];
                        $valid_password = $array[2];

                    if ($valid_name == $_POST['login'] && $valid_password == $_POST['pwd']) {


                        $_SESSION['Connected'] = true;
                        $_SESSION['login'] = $_POST['login'];
                        $_SESSION['pwd'] = $_POST['pwd'];

                        header ('location: ../index.php');
                        die;
                        
                    }
                    
                    
                }
                    $_SESSION['Connected'] = false;
                    $_SESSION['login'] = null;
                    $_SESSION['pwd'] = null;
                    echo '<body onLoad="alert(\'Membre non reconnu...\')">';
                    echo '<meta http-equiv="refresh" content="0;URL=loginform.php">';
            }
        ?>


    </body>
</html>