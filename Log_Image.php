<?php
session_start();
$e=$_SESSION['email'];
if(!isset($e))
{
	header("Location:Log_Color.php");
}
else
{
?>
<!doctype html>
<html>
	<section class ="showcase">
    <head>
	    <title>LOGIN:Image</title>
		<link rel="stylesheet" href="css/img.css">
	</head>
	<body>
        <video src="src/image.mp4" muted loop autoplay></video>
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
			<div class="formgroup-l">
				<div class="create-l">
					<header>Level-Image</header>					
					<form action="control.php" method="POST" enctype="multipart/form-data">
						<label>Upload your Image</label>
						<br>
						<input type="file" id="photo" name="image" accept=".jpg, .jpeg, .png, .gif">
						<br>
						<br>
						<input type="hidden" name="email" value="<?=$e;?>">
				    	<button type="submit" name="log_img" class="btn">LOGIN</button>
					</form>	
				</div>
		    </div>
		</div>
	</body>
    </section>
</html>
<?php } ?>