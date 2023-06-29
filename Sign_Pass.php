<!DOCTYPE html>
<html lang="en">
    <section class ="showcase">
        <head>
            <meta charset="UTF-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <link rel="stylesheet" href="css/sign_pass.css"/>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
            <title>SIGN UP:Password</title>
        </head>
        <body>
            <video src="src/sign_pass.mp4" muted loop autoplay></video>
            <div class="bubbles">
                <img src="src/rose.png">
                <img src="src/rose.png">
                <img src="src/rose.png">
                <img src="src/rose.png">
                <img src="src/rose.png">
                <img src="src/rose.png">
                <img src="src/rose.png">
                <img src="src/rose.png">
                <img src="src/rose.png">
                <img src="src/rose.png">
            </div>
            <div class="overlay"></div>
            <div class="container">
                <div class="form">
                    <br>
                    <div class="content">
                        <header>Level-Password</header>
                    </div>
                    <form name="spass" class="signUp" action="control.php" method="post">
                            <div class="formGroup">
                                <span class="fa fa-user"></span>
                                <input type="text" name="Name" class="n" autocomplete="off" placeholder="Full Name" required/>
                            </div>
                            <div id="n">
                            </div>
                            <div class="formGroup">
                                <span class="fa fa-envelope"></span>
                                <input type="email" name="Email" class="e" autocomplete="off"  placeholder="Email ID"  required/>
                            </div>
                            <div id="e">
                            </div>
                            <div class="formGroup">
                                <span class="fa fa-lock">  </span>
                                <input type="password" class="psw" name="Password" autocomplete="off" placeholder="Password" required /> 
                                <div class="show">SHOW</div>
                            </div>
                            <div id="p">
                            </div>
                            <div class="formGroup">
                                <span class="fa fa-lock"></span>
                                <input type="password" class="cpsw" name="Confirm_Password" autocomplete="off" placeholder="Confirm Password" required/>
                                <div class="c-show">SHOW</div>
                            </div>
                            <div id="cp">
                            </div>
                            <br>
                            <br>
                            <div class="formGroup">
                                <button type="submit" name="sign_pass" class="btn2">
                                      REGISTER
                                </button>
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
                                        showBtn.style.color = "#222";
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
                                        con_showBtn.style.color = "#222";
                                    }
                                });
                            </script>
                            <script>
                                  document.querySelector('.btn2').onclick=function()
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
            <script src="valid.js"></script>
        </body>
    </section>
</html> 