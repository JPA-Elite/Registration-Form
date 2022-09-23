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
    <div id="clock">
        <p class="date">{{ date }}</p>
        <p class="time">{{ time }}</p>

    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js"></script>
    <script>
        var clock = new Vue({
            el: '#clock',
            data: {
                time: '',
                date: ''
            }
        });

        var week = ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'];
        var timerID = setInterval(updateTime, 1000);
        updateTime();

        function updateTime() {
            var cd = new Date();
            clock.time = zeroPadding(cd.getHours(), 2) + ':' + zeroPadding(cd.getMinutes(), 2) + ':' + zeroPadding(cd.getSeconds(), 2);
            clock.date = zeroPadding(cd.getFullYear(), 4) + '-' + zeroPadding(cd.getMonth() + 1, 2) + '-' + zeroPadding(cd.getDate(), 2) + ' ' + week[cd.getDay()];
        };

        function zeroPadding(num, digit) {
            var zero = '';
            for (var i = 0; i < digit; i++) {
                zero += '0';
            }
            return (zero + num).slice(-digit);
        }
    </script>

</body>

</html>