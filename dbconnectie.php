<?php
    session_start();
    $_SESSION["user"] = "sean";
    $dsn = "mysql:host=localhost;dbname=chirpify";
    $usr = "root";
    $pwd = "";

    
    $conn = new PDO($dsn, $usr, $pwd);
<<<<<<< HEAD

    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
=======
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
>>>>>>> master
