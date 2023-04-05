<?php
include("dbconnectie.php");

$username = $_POST['username'];
$email = $_POST['email'];
$pswd = $_POST['pswd'];

// $sql = "INSERT INTO users ('username', 'email', 'pswd');
// VALUES ('$username', '$email', '$pswd')";



if(isset($_POST["username"])){
    try{
        $x = $conn->prepare("INSERT INTO users (username, email, pswd)
                    VALUES(:un,:em,:pw)");

        $x->execute([":un"=>$username, ":em"=>$email, ":pw"=>$pswd]);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    header("location:index.php?msg=toegevoegd aan de database");
}

