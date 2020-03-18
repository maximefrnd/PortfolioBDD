<?php

include_once 'PHP/BDD.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <Meta charset = "utf-8">
        <title>Mon Portfolio</title>
    </head>
    <body>
        <h1> Bienvenue ! </h1>

        <?php
        $object = new BaseDonnees;
        $object->connection();
        ?>

    </body>
</html>