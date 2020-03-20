<?php
    include_once 'BDD.php';
    include_once 'TestCo.php';
?>

<!doctype html>

<html lang="fr">
    <head>

        <meta charset="utf-8">

        <title>ADD WORK</title>
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

       if($Connected == false){
            header ('location: /loginform.php');
       }
       ?>

        <form action="add.php" method="post">

        <label for="img">Image Link</label>
        <textarea type="text" name="img"></textarea>
            <br />

        <label for="name">Name</label>
        <textarea type="text" name="name"></textarea>
            <br />

        <label for="description">Titre paragraphe n°2</label>
        <input type="text" name="description">
        <br />
                        
        </select>
        <br/>

        <input type="submit" value="Add">
        </form>

    </body>
</html>