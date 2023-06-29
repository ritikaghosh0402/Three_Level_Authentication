<?php
session_start();
$e=$_SESSION['email'];
if(!isset($e))
{
    header("Location:Log_Pass.php");
}
else 
{
?>
<!DOCTYPE html>
<html>
	<section class ="showcase">
        <head>
            <title>LOGIN:Colour</title>
            <link rel="stylesheet" href="css/color.css">
        </head>
        <body>
            <video src="src/color.mp4" muted loop autoplay></video>
            <div class="bubbles">
                <img src="src/purple.png">
                <img src="src/pink.png">
                <img src="src/red.png">
                <img src="src/orange.png">
                <img src="src/yellow.png">
                <img src="src/green.png">
                <img src="src/cyan.png">
                <img src="src/blue.png">
                <img src="src/white.png">
                <img src="src/rose.png">
            </div>
            <div class="container">
                <div class="formgroup-l">
                    <header>Level-Color</header>
                    <div class="create-l">
                        <form action="control.php" method="post">
                            <label for="favclr">Choose Your Color</label>
                            <br>
                            <br>
                            <input type="color" class="clr" name="favclr">
                            <br>
                            <br>
                            <input type="hidden" name="email" value="<?=$e;?>">
                            <input type="submit" name="log_color" class="btn" value="SUBMIT">
                        </form>
                    </div>
                </div>
            </div>
        </body>
    </section>
</html>
<?php } ?>