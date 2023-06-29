<?php
session_start();
$e=$_SESSION['email'];
if(!isset($e))
{
    header("Location:Sign_Pass.php");
}
else
{
?>
<!doctype html>
<html>
	<section class ="showcase">
    <head>
	    <title>SIGN UP:Colour</title>
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
            <div class="formgroup-s">
			    <header>Level-Colour</header>
                <div class="create-s">
                    <form action="control.php" method="post">
                        <label for="favclr">Choose Your Color</label>
                        <br>
                        <br>
                        <input type="color" class="clr" name="favclr">
                        <br>
                        <br>
                        <label for="favclr">Confirm Your Color</label>
                        <br>
                        <br>
                        <input type="color" class="cclr" name="c-favclr">
                        <input type="hidden" name="email" value="<?=$e;?>">
                        <input type="submit" name="sign_color" class="btn" value="SUBMIT">
                        <script>
                            document.querySelector('.btn').onclick=function()
                            {
                              var c= document.querySelector('.clr').value;
                              var cc= document.querySelector('.cclr').value;
                              if(c!=cc)
                              {
                                  alert("Color did not match try again");
                                  return false; 
                              }
                            }
                        </script>
                         
                    </form>
                    
                </div>
            </div>
        </div>
	</body>
</section>
</html>
<?php } ?> 