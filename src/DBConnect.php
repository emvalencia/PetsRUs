<?php

    function connect()
    {        
        $servername = "127.0.0.1";
        $username = "joey";
        $password = "123456789";
        $dbname = "petsrus";
        $charset = "utf8mb4";
        
        try
        {
            $dsn = "mysql:host=".$servername.";dbname=".$dbname.";charset=".$charset;
            $pdo = new PDO($dsn, $username, $password);
            return $pdo;
        }
        catch(PDOException $e)
        {
            echo "connection failed: ".$e->getMessage();
        }
        
    }
?>
