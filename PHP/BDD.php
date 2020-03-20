<?php

        $serv_n = "localhost";
        $user_n = "root";
        $mdp = "";
        $bdd_n = "portfoliobdd";
        $charset = "utf8mb4";
      
        
        try{
            $dsn = "mysql:host=".$serv_n.";dbname=".$bdd_n.";charset=".$charset;
            $pdo = new PDO($dsn, $user_n, $mdp);
        }
        catch (PDOException $e) {
            echo "Connection failed : ".$e->getMessage();
        }
        $pdo->query('SET NAMES UTF8');

        session_start();
