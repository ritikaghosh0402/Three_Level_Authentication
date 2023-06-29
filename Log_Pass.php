<!DOCTYPE html>
<html lang="en" dir="ltr">
    <section class ="showcase">
    <head>
        <meta charset="utf-8">
        <title>LOGIN:Password</title>
        <link rel="stylesheet" href="css/log_pass.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    </head>
    <body>
        
        <video src="src/pass.mp4" muted loop autoplay></video>
        <div class="overlay"></div>
        <div class="bg-img">
            <div class="content">
                <header>Level-Password</header>
                <form action="control.php" method="post">
                    <div class="field">
                        <span class="fa fa-user"></span>
                        <input type="email" autocomplete="off" name="Email" placeholder="Email or Phone" required >
                    </div>
                    <div class="field space">
                        <span class="fa fa-lock"></span>
                        <input type="password" name="Password" class="pass-key" autocomplete="off" placeholder="Password"  required >
                        <span class="show">SHOW</span>
                    </div>
                    <div class="pass">
                        <a href="Forgot_Pass.php">Forgot Password?</a>
                    </div>
                    <button type="submit" name="log_pass" class="btn2">LOGIN</button>

                    <script>
                        const pass_field = document.querySelector('.pass-key');
                        const showBtn = document.querySelector('.show');
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
                                showBtn.style.color = "#222";
                            }
                        });
                    </script>
                    <script>
                        document.querySelector('.btn2').onclick=function()
                        {
                            var p= document.querySelector('.pass-key').value;
                            if(p.length<6)
                            {
                                alert("Password should be in 6 character");
                                return false; 
                            }
                        }
                    </script>
                </form>
            </div>
            <div class="bubbles">
                <img src="src/blue_light.png">
                <img src="src/blue_light.png">
                <img src="src/blue_light.png">
                <img src="src/blue_light.png">
                <img src="src/blue_light.png">
                <img src="src/blue_light.png">
                <img src="src/blue_light.png">
                <img src="src/blue_light.png">
                <img src="src/blue_light.png">
                <img src="src/blue_light.png">
            </div> 
        </div>
    </body>
</section>
</html>