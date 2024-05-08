<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN and SIGNUP</title>
   <link rel="stylesheet" href="style.css">
   <script src="https://kit.fontawesome.com/fe5aebb296.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div id="logo"> 
            <img src="./SAVE_BLOODY_LIVES-removebg-preview.png" style="  width: 120px;
            height: 120px;">
       </div> 
    <div class="form-box">
        
<?php 
         
         include("php/config.php");
if(isset($_POST['login']))
        {
                $username = mysqli_real_escape_string($con,$_POST['username']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM users WHERE Username='$username' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['password'] = $row['Password'];
                    header("Location: about.php");

                }else{
                    echo '<script>alert("Wrong Username or Password")</script>'; 
                   
                }
               
                    
                
              }
              else
         
                ?>

        <h1 id="title">Login</h1>
        <form action="" method="post">
            <div class="input-group">
                <div class="input-field" id="namefield">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Username" name="username">
                </div>


                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password" name="password">
                </div>

               
                <input type="submit" name="login" id="submitBtn" value="SUBMIT" class="wrap">
                <p>Forgot password? <a href='#'>Click here</a></p>
            </div>
            <div class="btn-field">
                <button type="button" name="sign" id="signupBtn" class="disable">SIGN-UP</button>
                <button type="button" name="log" id="loginBtn" class="enable">LOGIN</button>
            </div>
        </form>
    </div>
    </div>

    <script>      
let signupBtn= document.getElementById("signupBtn");
signupBtn.onclick=function(){
    location.href='register.php';
}

    </script>
</body>
</html>