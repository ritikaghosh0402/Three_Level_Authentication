<?php
session_start();
$e=$_SESSION['mail'];
if(isset($e));
{
?>
<html>
    <section class ="showcase">
        <head>
            <title>
                Email Verification
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
                    <form action="control.php" method="post">
                        <div class="content">
                            <br>
                            <header>Email Verifiaction</header>
                        </div>
                        <div class="formGroup">
                            <br>
                            <span class="fa fa-at"></span>
                            <input type="text" name="otp" required placeholder="Enter the OTP">
                        </div>
                        <div class="formgroup">
                            <input type="hidden" name="email" value="<?=$e;?>">
                            <button type="submit" name="sub_otp" class="btn1">VERIFY</button>                     
                        </div>
                    </form>
                </div>
            </div>
        </body>
    </section>
</html>
<?php } ?>