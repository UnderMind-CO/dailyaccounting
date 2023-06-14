<?php



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Web App dedicated to personal financial calculation and management with emphasis on savings and budget management." />
    <link rel="stylesheet" type="text/css" href="styless.css">
    <link rel="shortcut icon" href="/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="/js/main.js"></script>
  
    
    <title>Login & register |Daily Accounting</title>
    
</head>


<div id="navbar">

    <a class="active" href="../index.html">Daily Accounting</a>

<div id="navbar-right">
    <a href="#" id="len2">Save</a>
    <a href="./about.html" id="len3">About us</a>
</div></div>

<div class="wrapper">
    <div class="title-text">
       <div class="title login">
         Daily<span>Login</span>
       </div>
       <div class="title signup">
          Signup <h3>Now!</h3>
       </div>
    </div>



    <div class="form-container">
       <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
       </div>
       <div class="form-inner">
          <form action="../public/validacion.php" method="post" class="login">
          
         
            <div class="field">
                <input type="text" name="email" placeholder="Enter Your Email" required>
             </div>
             <div class="field">	

                <input type="password" name="contraseña" placeholder="Password" required>
             </div>
             <div class="pass-link">
                <a href="#">Forgot password?</a>
             </div>
             <div class="field btn">
                <div class="btn-layer"></div>
                <input type="submit" name="login" value="Login">
             </div>
             <div class="signup-link">
                Not a member? <a href="#register">Signup now</a>
             </div>
          </form>
          <form action="../public/validacion.php" method="post" class="signup" autocomplete="off">
          
            <div class="field">
                <input type="text" name="usuario_reg" placeholder="Full Name" required>
             </div>
             <div class="field">
                <input type="email" name="email_reg" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control col-md-3"  required>
             </div>
             <div class="field">
               <input type="date" name="fecha_reg" placeholder="date of birth" required>
            </div>
             <div class="field">
                <input type="password" name="contraseña_reg" placeholder="Password" required>
             </div>
             <div class="field">
                <input type="password" name="contraseña_reg1" placeholder="Confirm password" required>
             </div>
             <div class="field">
                <input type="select" name="ocupacion" placeholder="Select Ur Ocupation" required>
             </div>
             <div class="field btn">
                <div class="btn-layer"></div>
                <input type="submit" name= "signup" value="Signup">
                
             </div>
          </form>
       </div>
    </div>
 </div>

<?php

include("../public/dab_conct.php");


?>

<?php
require './partials/footer.php'
?> 





 <script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = (()=>{
      loginForm.style.marginLeft = "-50%";
      loginText.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (()=>{
      loginForm.style.marginLeft = "0%";
      loginText.style.marginLeft = "0%";
    });
    signupLink.onclick = (()=>{
      signupBtn.click();
      return false;
    });
 </script>
 <script src="/js/jquery.js"></script>



   </body>

<!-- /* THEME CREATE BY : JHOAN

▪▀▄▀▪ |̿ \͇|  |̶͇̿ ̶͇̿ ͇̿  \ ͇ /  |̶͇̿ ̶͇̿ ͇̿  |̿ ̿ ̿\  |̿ V ̿|  |  |̿ \͇|  |͇̿ ͇̿ ͇̿ ͇̿)     |͇̿ ͇̿ ͇̿ ͇̿  |͇̿ ͇̿ ͇̿|  |͇̿ ͇̿ ͇̿ ͇̿)  |̶͇̿ ̶͇̿ ͇̿  ▪▀▄▀▪


                     |͇̿ ͇̿ ͇̿ ͇̿  |̿ ̿ ̿\  |̶͇̿ ̶͇̿ ͇̿  |̶̿ ̶̿ ̶̿ ̶̿|  ̿ ̿|̿ ̿  |̶͇̿ ̶͇̿ ͇̿  |͇̿ ͇̿ ͇̿ ͇̿)    8/12/22 

*/ -->

</html>