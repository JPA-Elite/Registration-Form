<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../resources/images/favicon.png">
    <link rel="stylesheet" href="../resources/css/style.css">
    <title>Welcome</title>
</head>

<body id="welcome">
    <video autoplay muted loop id="myVideo">
        <source src="../resources/video/halo.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
   
    <div class="intro_main">
    <div class="v2"></div>
        <div>
            <h1 class="title">Hello! Welcome!</h1>
            <?php

            $fname = $_POST["fname"];
            $sname = $_POST["sname"];
            $email = $_POST["email"];
            $address = $_POST["address"];
            $password = $_POST["password"];


            if (isset($_POST["submit"])) {
                echo "<h3>Your_Name: $fname  $sname</h3>";
                echo "<h3>Your_Address:  $address</h3>";
                echo "<h3>Your_Email-Address: $email</h3>";
                echo "<h3>Your_password is $password</h3>";
            }

            ?>

        </div>

    </div>
    <script src="../resources/js/function.js"></script>

</body>

</html>