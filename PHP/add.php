<!doctype html>

<html lang="fr">
    <head>

        <meta charset="utf-8">

        <title>ADD</title>
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

            include 'BDD.php';

            $img = $_POST['img'];
            $name = $_POST['name'];
            $description = $_POST['description'];


            $requeteAdd = "INSERT INTO WORK (picture, name, description)
            VALUES (?, ?, ?)";
            $query = $pdo->prepare($requeteAdd);
            
            $query->bindValue(1, $img, PDO::PARAM_STR);
            $query->bindValue(2, $name, PDO::PARAM_STR);
            $query->bindValue(3, $description, PDO::PARAM_STR);


            $query->execute();
            
            print_r($query);
            
            header ('location: ../index.php');


        ?>


    </body>
</html>