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

<body>
    <div class="mask v2"></div>
    <div class="intro_main">
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

</body>

</html>