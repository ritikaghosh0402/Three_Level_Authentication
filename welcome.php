<?php
session_start();
if(isset($_SESSION['email']))
{
  $e=$_SESSION['email'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<section class="showcase">  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WELCOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/tnk_wel.css" />
  </head>

  <body>
    <video src="src/welcome.mp4" muted loop autoplay></video>
    <div class="hero">
      <nav>
        <div class="nav-content">
          <ul class="nav-links">
            <li><a></a></li>
            <li><a></a></li>
            <li><a></a></li>
            <li><a></a></li>
            <li><a></a></li>
            <li><a href="control.php?name=<?='out';?>"><h3>Logout</h3></a></li>
          </ul>
        </div>
      </nav>
      <h1>Welcome <?=$e;?></h1>
      <p>Thank you for join us</p>
      <div class="box">
        <div class="pyro">
          <div class="before"></div>
          <div class="after"></div>
        </div>
      </div>
    </div>
  </body>
</section>
</html>
<?php } ?>