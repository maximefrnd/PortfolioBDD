<?php

class BaseDonnees {

    public function connection()
    {

        try
        {
            $pdo = new PDO("mysql:host=localhost;dbname=test;charset=utf8",'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } 
        catch (PDOException $e)
        {
            echo "Connection failed : ".$e->getMessage();
        }
    }

}