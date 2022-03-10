<?php 

if(isset($_POST['submit'])){
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="old.css">
</head>
<body>

<div class="popup-screen">
    <div class="popup-box">
        <h3>SIGNUP</h3>
        <form>
            <input class="place" type="text" placeholder="Please input username.....">
            <input type="password" placeholder="Please input password.....">
            <input type="text" placeholder="Please confirm password.....">
            <button class="btn-submit">Signup</button>
            <span class="close-btn">x</span>
        </form>
    </div>
</div>
    <section>
            
                                        
    </div>
        <div class="container">
            <form class="login-form">
               <div class="content">
                    <h2>LIBERO</h2>
                    <hr class="line">
                    <form method="POST">
                        <div class="form-content">
                            <div class="user-name"><br>
                
                                <input type="text" class="username" placeholder="Username"> 
                            </div>
                            <div class="pass-word">
                            
                                <input type="password" class="username" placeholder="Password">
                            </div>

                            <div class="submit-button">
                                <input type="submit" name="submit" id="submit-btn" value="Login">
                            </div>
                            <hr class="line2">
                           <div class="lowerpart">
                           <a href="#" class="signup-btn"> Don't Have an Account? Sign Up</a>
                                
                           </div>
                        </div>
                    </form>
                </div>
            </form>
        </div>
    </section>

        <script src="app.js"></script>
        <div class="indent" style="margin-top:900px;"></div>


</body>
</html>