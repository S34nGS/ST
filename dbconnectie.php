<?php
    session_start();
    $_SESSION["user"] = "sean";
    $dsn = "mysql:host=localhost;dbname=chirpify";
    $usr = "root";
    $pwd = "root";

    $conn = new PDO($dsn, $usr, $pwd);

    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
?>