<?php
include("dbconnectie.php");

$username = $_POST['username'];
$pswd = $_POST['pswd'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username=:un AND pswd=:pw");

$stmt->execute([":un"=>$username, ":pw"=>$pswd]);

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// if($data[])

// echo "<pre>".print_r($data,true)."</pre>";

if(isset($data[0]["id"])){
        $_SESSION["ingelogdAls"] = $data[0]["id"];
} else {
    echo "Gebruikersnaam of wachtwoord onbekend";
}

header("location:index.php?msg=ingelogd");