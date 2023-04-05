<?php
    session_start();
    $_SESSION["user"] = "sean";
    $dsn = "mysql:host=localhost;dbname=chirpify";
    $usr = "root";
    $pwd = "root";

    
    $conn = new PDO($dsn, $usr, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
