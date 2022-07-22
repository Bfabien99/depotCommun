<?php
    $dsn="mysql:dbname=crudsimple;host=localhost";
    $password = "";
    $user = "root";

    try{
        $connect = new PDO($dsn,$user,$password,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        ]);
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
