<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  </head>
  <body>

    <header>
      
        ABOUT US <div class="menu-btn"></div>
        
      </div>
    </header>

    <section class="home">
      <video class="video-slide active" src="src/about1.mp4" autoplay muted loop></video>
      <video class="video-slide" src="src/about2.mp4" autoplay muted loop></video>
      <video class="video-slide" src="src/about3.mp4" autoplay muted loop></video>
      <video class="video-slide" src="src/about4.mp4" autoplay muted loop></video>
      <video class="video-slide" src="src/about5.mp4" autoplay muted loop></video>
      <div class="content active">
        <h1><span class="auto-input"></span></h1>
        <p>Authentication is the process of identifying users that request access to a system, network, or device. Access control often determines user identity according to credentials like username and password. Other authentication technologies like biometrics and authentication apps are also used to authenticate user identity.
          Controlling access is the basis of all security. The right people should be allowed in, and the wrong people kept out. This is done by confirming – or authenticating – the identity of the person seeking access, and then checking that the person is authorized to enter.
          </p>
        
      </div>
      <div class="content">
        <h1><span class="auto-user"></span></h1>
        <p>User authentication is a method that keeps unauthorized users from accessing sensitive information. For example, User A only has access to relevant information and cannot see the sensitive information of User B. 
          Cybercriminals can gain access to a system and steal information when user authentication is not secure. The data breaches companies like Adobe, Equifax, and Yahoo faced are examples of what happens when organizations fail to secure their user authentication. 
          </p>
        
      </div>
      <div class="content">
        <h1><span class="auto-pass"></span></h1>
        <p> During registration, user should enter his email, name, password and confirm pasword. This phase user create his own password and the User should have a valid email id. During the login phase, user enters his email id and password to check the email and password is valid or not. If email amd password get wrong then user cannot go to the next phase.
        </p>
      </div>
      <div class="content">
        <h1><span class="auto-color"></span></h1>
        <p> During registration, user should choose color and confirm the color. The User can choose colors from 0 to 255 for each color of RGB model and can choose from #000000 to #FFFFFF of HEX model and also can choose HSL model. During the login phase, user choose his registerd color using rgb,hex or hsl model. If user choose the currect color then user can goto the next level.</p>
      </div>
      <div class="content">
        <h1><span class="auto-digital"></span></h1>
        <p>Image authentication is essential to determining whether the evidence presented is authentic or has been altered in some way. When altered, images don't portray an accurate representation of the events as they occurred.Authentication methods provide a means of ensuring the integrity of an image. Therefore there is need to protect these images against various attempts to manipulate them and it is important to make an effective method to solve image authentication problem that is ensuring the integrity of an image.</p>  
      </div>
      <div class="content">
        <h1><span class="auto-conclusion"></span></h1>
        <p>Authentication technology is always changing. Businesses have to move beyond passwords and think of authentication as a means of enhancing user experience. Authentication methods like biometrics eliminate the need to remember long and complex passwords. As a result of enhanced authentication methods and technologies, attackers will not be able to exploit passwords, and a data breach will be prevented.</p>  
      </div>
      
      <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
      </div>
      
    </section>

    <script type="text/javascript">
    

    //Javacript for video slider navigation
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    var sliderNav = function(manual){
      btns.forEach((btn) => {
        btn.classList.remove("active");
      });

      slides.forEach((slide) => {
        slide.classList.remove("active");
      });

      contents.forEach((content) => {
        content.classList.remove("active");
      });

      btns[manual].classList.add("active");
      slides[manual].classList.add("active");
      contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        sliderNav(i);
      });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script> var typed = new Typed(".auto-input", {
      strings: [" INTRODUCTION"],
      typeSpeed:250,
      onComplete: function(self) { self.cursor.remove() }
          })</script>

          <script> var typed = new Typed(".auto-user", {
      strings: ["why is Authentication important?"],
      typeSpeed:250,
      onComplete: function(self) { self.cursor.remove() }
          })</script>
          <script> var typed = new Typed(".auto-pass", {
      strings: ["Password Authentication "],
      typeSpeed:250,
      onComplete: function(self) { self.cursor.remove() }
          })</script>
          <script> var typed = new Typed(".auto-color", {
      strings: ["Color Code Authentication "],
      typeSpeed:250,
      onComplete: function(self) { self.cursor.remove() }
          })</script>
          <script> var typed = new Typed(".auto-digital", {
      strings: ["Image Authentication"],
      typeSpeed:250,
      onComplete: function(self) { self.cursor.remove() }
          })</script>
          <script> var typed = new Typed(".auto-conclusion", {
      strings: ["conclusion"],
      typeSpeed:250,
      onComplete: function(self) { self.cursor.remove() }
          })</script>
  </body>
</html>
