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
            Reset Your Password
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
                        <header> Reset Password</header>
                    </div>
                    <div class="formGroup">
                        <span class="fa fa-lock"></span>
                        <input type="password" name="pass" class="psw" required placeholder="Enter New Password">
                        <span class="show">SHOW</span>
                    </div>
                
                    <div class="formGroup">
                        <span class="fa fa-lock"></span>
                        <input type="password"  class="cpsw" required placeholder="Confirm Password">
                        <span class="c-show">SHOW</span>
                    </div>
                    <div class="formGroup">
                        <input type="hidden" name="email" value="<?=$e;?>">
                        <button type="submit" name="sub_pass" class="btn1">RESET</button>
                    </div>
                    <script>
                        const pass_field = document.querySelector('.psw');
                        const showBtn = document.querySelector('.show');
                        const con_pass_field = document.querySelector('.cpsw');
                        const con_showBtn = document.querySelector('.c-show');
                        showBtn.addEventListener('click', function()
                        {
                            if(pass_field.type === "password"){
                                pass_field.type = "text";
                                showBtn.textContent = "HIDE";
                                showBtn.style.color = "#3498db";
                            }
                            else
                            {
                                pass_field.type = "password";
                                showBtn.textContent = "SHOW";
                                showBtn.style.color = "#fff";
                            }
                        });
                        con_showBtn.addEventListener('click', function()
                        {
                            if(con_pass_field.type === "password"){
                                con_pass_field.type = "text";
                                con_showBtn.textContent = "HIDE";
                                con_showBtn.style.color = "#3498db";
                            }
                            else
                            {
                                con_pass_field.type = "password";
                                con_showBtn.textContent = "SHOW";
                                con_showBtn.style.color = "#fff";
                            }
                        });
                    </script>
                    <script>
                        document.querySelector('.btn1').onclick=function()
                        {
                            var p= document.querySelector('.psw').value;
                            var cp= document.querySelector('.cpsw').value;
                            if(p.length<6 && cp.length<6)
                            {
                                alert("Password should be in 6 character");
                                return false; 
                            }
                            if(p!=cp)
                            {
                                alert("Password did not match try again");
                                return false; 
                            }
                        }
                    </script>
                </form>
            </div>
        </div>
    </body>
</section>
</html>
<?php } ?>