<?php
    include("dbconnectie.php");
?>

<?php
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $pswd = $_REQUEST['pswd'];

    $sql = "INSERT INTO users ('username', 'email', 'pswd');
    VALUES ('$username', '$email', '$pswd')";




if(isset($_POST["content"]))





if(isset($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$username\n $email\n "
        . "$pswd");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . isset($conn);
}
?>