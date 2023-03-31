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
            </div>
            <div class="feed"></div>
        </div>

        <div class="Friends">
            <h1>Friends</h1>
        </div>

    </div>


</body>
</html>