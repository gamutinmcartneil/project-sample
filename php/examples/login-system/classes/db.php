<?php

class Dbh {

    protected function connect() {
        try {
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=infitask', $username, $password);

            return $dbh;
    
        } catch (PDOException $e) {
            // print "Error!: " . $e->getMessage() . "<br>";
            header("location: 500.php");
            die();
        }
    }
    
}

$url =  $_SERVER['PHP_SELF'];

echo $url;