<?php
session_start();
$e=$_SESSION['email'];
if(!$e)
{
    header("Location:Sign_Color.php");
}
else
{
?>
<!doctype html>
<html>
	<section class ="showcase">
    <head>
	    <title>SIGN UP:Image</title>
		<link rel="stylesheet" href="css/img.css">
	</head>
	<body>
        <video src="src/image.mp4
        " muted loop autoplay></video>
        <div class="bubbles">
                <img src="src/g1.png">
                <img src="src/g2.png">
                <img src="src/g3.png">
                <img src="src/g1.png">
                <img src="src/g2.png">
                <img src="src/g3.png">
                <img src="src/g1.png">
                <img src="src/g2.png">
                <img src="src/g3.png">
                <img src="src/g1.png">
        </div> 
        <div class="container">
			<div class="formgroup-s">
				<div class="create-s">
                    <header>Level-Image</header>
                    
                    <form action="control.php" method="post" enctype="multipart/form-data">
                        <label>Upload your Image</label>
                        <br>
                        <input type="file" name="image" class="img" accept=".jpg, .jpeg, .png, .gif">
                        <br>
                        <br>
                        <label>Confirm your Image</label>
                        <br>
                        <input type="file" name="cimage" class="cimg" accept=".jpg, .jpeg, .png, .gif">
                        <br>
                        <br>
                        <input type="hidden" name="email" value="<?=$e;?>">
                        <button type="submit" name="sign_img" class="btn">SUBMIT</button>
                        <script>
                            document.querySelector('.btn').onclick=function()
                            {
                                var i= document.querySelector('.img').value;
                                var ci= document.querySelector('.cimg').value;
                                if(i!=ci)
                                {
                                    alert("Photo did not match try again");
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