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
    <div class="cursor"></div>
    <div class="cursor-border"></div>
   
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
                echo "<h3 id='typedtext'>Your_Name: $fname  $sname</h3>";
                echo "<h3>Your_Address:  $address</h3>";
                echo "<h3>Your_Email-Address: $email</h3>";
                echo "<h3>Your_password is $password</h3>";



                

// echo "<h3 id='typedtext'>Your_Name: $fname  $sname</h3>";
//                 echo "<h3>Your_Address:  $address</h3>";
//                 echo "<h3>Your_Email-Address: $email</h3>";
//                 echo "<h3>Your_password is $password</h3>";




// set up text to print, each item in array is new line
               echo "<script></script>";

            }
            ?>

        </div>

    </div>
    <div class="back b1"></div>
    <div class="back b2"></div>
    <div class="back b3"></div>
    <script src="https://api.map.baidu.com/api?v=3.0&amp;ak=fQhFT2lC66DszI30AOkLCKu0720e3Mca"></script>
    <script src="../resources/js/function.js"></script>

    <script>
        var cursor = document.querySelector(".cursor");
        var cursorBorder = document.querySelector(".cursor-border");
        var getXY = function(event, element) {
            var x = event.clientX;
            var y = event.clientY;
            var rect = element.getBoundingClientRect();
            x -= rect.width / 2;
            y -= rect.height / 2;
            return [x, y];
        };
        document.addEventListener("mouseenter", function(e) {
            cursor.animate([{
                opacity: 0
            }, {
                opacity: 1
            }], {
                duration: 300,
                fill: "forwards"
            });
            cursorBorder.animate([{
                    opacity: 0
                },
                {
                    opacity: 0.8
                }
            ], {
                duration: 300,
                fill: "forwards"
            });
        });
        document.addEventListener("mousemove", function(e) {
            var _a = getXY(e, cursor),
                cursorX = _a[0],
                cursorY = _a[1];
            var _b = getXY(e, cursorBorder),
                cursorBorderX = _b[0],
                cursorBorderY = _b[1];
            var targetName = e.target.tagName;
            if (targetName === "A" || targetName === "LABEL" || targetName === "BUTTON") {
                cursorBorder.classList.add("on-focus");
            } else {
                cursorBorder.classList.remove("on-focus");
            }
            cursor.animate([{
                transform: "translate(".concat(cursorX, "px, ").concat(cursorY, "px)")
            }, {
                transform: "translate(".concat(cursorX, "px, ").concat(cursorY, "px)")
            }], {
                duration: 300,
                fill: "forwards",
                delay: 50
            });
            cursorBorder.animate([{
                transform: "translate(".concat(cursorBorderX, "px, ").concat(cursorBorderY, "px)")
            }, {
                transform: "translate(".concat(cursorBorderX, "px, ").concat(cursorBorderY, "px)")
            }], {
                duration: cursorBorder.classList.contains("on-focus") ? 1500 : 300,
                fill: "forwards",
                delay: 150
            });
        });
        document.addEventListener("mouseleave", function(e) {
            cursor.animate([{
                opacity: 0.8
            }, {
                opacity: 0
            }], {
                duration: 500,
                fill: "forwards"
            });
            cursorBorder.animate([{
                    opacity: 0.8
                },
                {
                    opacity: 0
                }
            ], {
                duration: 500,
                fill: "forwards"
            });
        });
    </script>
</body>

</html>