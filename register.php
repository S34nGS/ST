<?php
    include("dbconnectie.php");
?>

<label for="register">Fill in your information</label>
    <form action="">
        <label for="name">Name</label>
        <input type="text" name="name" size="20">

        <br>
        <br>

        <label for="email">Email</label>
        <input type="text" name="email" size="20">

        <br>
        <br>

        <label for="password">Password</label>
        <input type="text" name="password" size="20">

        <br>

        <input type="submit" value="Register">
    </form>

    <?php
        $sql = "INSERT INTO users (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@example.com')";
    ?>