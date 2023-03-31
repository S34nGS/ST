<?php
    include("dbconnectie.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <label for="tweet">Write your tweet</label>
    <form action="">
        <input type="text" name="tweet" size="50">
        <input type="submit" value="Tweet">
    </form>


    <?php
    /*
    session_start();
    if(isset($_SESSION["userID"]){

    }
    */
    ?>

</body>
</html>
