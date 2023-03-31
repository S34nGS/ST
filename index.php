

<!DOCTYPE html>

 <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="main">
        <div class="NavLogo">
            <div class="logo">
                <img src="pictures/birdlogo.png" alt="" id="logo">
            </div>
            <div class="navigation">
                <a href="index.php">Home</a>
                <a href="news.php">News</a>
                <a href="profile.php">Profile</a>
                <a href="settings.php">Settings</a>
                <a href="post.php">post(test)</a>
            </div>
        </div>

        <div class="FeedSbar">
            <div class="searchbar">
                <input type="search" id="search" value="search" size="80">
                <button id="inlog">Log In</button>
                <input type="button" onclick="window.location.href='register.php';" value="Register">
            </div>
            <div class="feed">
<<<<<<< HEAD

=======
                <?php
                    while( $row = $stmt->fetch(PDO::FETCH_OBJ) ) {
                        echo "<br>User: <b>{$row->username}</b> heeft wachtwoord <b>{$row->password}</b>";
                    }
                ?>

                <br>

                <div class="tweets">
                    <?php
                        try {
                            $query = $conn->prepare("SELECT * FROM tweet");
                            $query->execute();
                            $result = $query->fetchAll(PDO::FETCH_ASSOC);
                            foreach($result as &$data) {
                                echo $data["text"] . " ";
                            }
                        }   catch(PDOException $e) {
                                die("Error!: " . $e->getMessage());
                        }


                        /*$sql = "CREATE TABLE inlog(
                            id INT  AUTO_INCREMENT PRIMARY KEY,
                            inlognaam VARCHAR(20) NOT NULL,
                            voornaam VARCHAR(15) NOT NULL,
                            achternaam VARCHAR(20) NOT NULL,
                            telefoonnummer VARCHAR(15) NOT NULL,
                            isVIP BOOLEAN DEFAULT TRUE
                        )";

                        $conn->query($sql);
                        a
                        */
                    ?>
                </div>
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master
            </div>
        </div>

        <div class="Friends">
            <h1>Friends</h1>
        </div>

    </div>


</body>
</html>