<html>
    <section class ="showcase">
        <head>
            <title>
                OTP Generation
            </title>
            <link rel="stylesheet" href="css/reset.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        </head>
    
        <body>
            <video src="src/reset1.mp4" muted loop autoplay></video>
            <div class="bubbles">
                <img src="src/orange_light.png">
                <img src="src/orange_light.png">
                <img src="src/orange_light.png">
                <img src="src/orange_light.png">
                <img src="src/orange_light.png">
                <img src="src/orange_light.png">
                <img src="src/orange_light.png">
                <img src="src/orange_light.png">
                <img src="src/orange_light.png">
                <img src="src/orange_light.png">
            </div>
            <div class="container">
                <div class="form">
                    <form name="set" action="control.php" method="post">
                        <div class="content">
                            <br>
                            <header>Forgot Password?</header>
                        </div>
                        <div class="formGroup">
                            <br>
                            <span class="fa fa-at"></span>
                            <input type="email" name="Email" required placeholder="Enter Your Email Address">
                        </div>
                        <div id="e">
                        </div>
                        <div class="formgroup">
                            <button type="submit" name="sub_mail" class="btn1">GET OTP</button>                     
                        </div>
                    </form>
                </div>
            </div>
            <script src="valid_reset.js"></script>
        </body>
    </section>
</html>