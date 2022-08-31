<!DOCTYPE html>

<html>

    <head>

        <title> Capgemini Smart Home </title>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="style.css">

    </head>

    <body>

        <div class = "banner">

            <video autoplay loop muted plays-inline class="back-video">
                <source src="video5.mp4" type="video/mp4">
            </video>
            

            <div class = "navbar">
                <img src="logo.png" class="logo">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Temperature</a></li>
                    <li><a href="test.php">Motion Sensor</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>

            <div class="content">
                <h1><span class = "auto-input"> </span></h1>

                <div>
                    <button type="button"><span class = "test1234"></span>LOG IN</button>
                    <button type="button"><span class = "test1234"></span>SIGN UP</button>
                </div>
            </div>


        </div>

        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script>
            var typed = new Typed(".auto-input", {
                strings: ["Test2", "Capgemini Smart Home", "Developed By Urban Waffles"],
                typeSpeed: 50,
                backSpeed: 50,
                loop: true
            })
        </script>

    
    </body>


</html>