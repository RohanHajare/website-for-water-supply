
<?php 

    include('admin/config/connection.php');
    // include("config/dbcon.php");
    include("logincode.php");
    if(isset($_SESSION['auth']))
    {
        $_SESSION['status']="You are alreaady logged in";
        header('location:index.php');
    }
   
    ?>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        
        
        
        <div id="form">
            
            <h1>Login Form</h1>
            <form name="form" action="logincode.php" onsubmit="return isvalid()" method="POST">
                <p class="title">Username: </p>
                <input type="text" id="user" name="user"></br></br>
                <p class="title">Password: </p>
                <input type="password" id="pass" name="pass"></br></br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
            </form>
               Create Account-
                     <a href="signup.html">Register Here</a>
        </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>
    </body>
</html>
