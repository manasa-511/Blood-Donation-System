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
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Username,Email FROM users WHERE Username='$username' or Email='$email' ");

         if(mysqli_num_rows($verify_query) !=0 ){

            echo '<script>alert("Username/Email already used, Try another one!")</script>'; 
            
         }
         else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Password) VALUES('$username','$email','$password')") or die("Error Occured");
            echo '<script>alert("Registration successful!")</script>';
            
            header("Location: about.php");
        }
    }

        
        else
         
        ?>

        <h1 id="title">Sign-up</h1>
        <form action="" method="post">
            <div class="input-group">
                <div class="input-field" id="namefield">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Username" name="username" required>
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" required>
                </div>


                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required>
                </div>

               
                <input type="submit" name="submit" id="submitBtn" value="SUBMIT" class="wrap">

                <p>Already have an account? <a href='index.php'>Click here</a>
            
            
            </p>
            </div>
            <div class="btn-field">
                <button type="button" name="sign" id="signupBtn" class="disable">SIGN-UP</button>
                <button type="button" name="log" id="loginBtn" class="enable">LOGIN</button>
            </div>
        </form>
    </div>

    </div>

    <script>      
let loginBtn= document.getElementById("loginBtn");

loginBtn.onclick=function(){
    
}


    </script>
</body>
</html>