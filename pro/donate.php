<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor form</title>

<style>

body{
    background-image: url(https://img.freepik.com/free-vector/different-colorful-watercolor-backgrounds_1340-8979.jpg?w=740&t=st=1708597362~exp=1708597962~hmac=331ee02bc1a497b52d84bf2ec011772034204d277674c3de5ff0d2b2fb8ce231);
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: start;  
    min-height:100vh;
    
}

.logo img{
    width: 120px; 
    height: 120px;
    position: absolute;
    top:0;
    left:0;
    
}

.input-group{
    background-color:  #f5c5c5;
}

input[type=text],select {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number] {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=date]{
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=email]{
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.wrap{
  background: #eaeaea;
  border: none;
  color: rgb(19, 1, 1);
  padding: 12px 20px;
  text-decoration: none;
  margin: 10px 43px;
  cursor: pointer;
  border-radius: 10px;
  align-items: center;
}


input[type=submit]:hover {
    background: #080000  ;
    color:  #eaeaea;
}

div {
  border-radius: 10px;
  padding: 40px;
  border: #ded1d1;
  
}

.input-field b{
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px;
}

input[type=radio] {
    border: 0px;
    width: 10%;
    height: 2em;

}
.input-field{
    font-size: 15px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 100;
    margin:0;
}


.describe{
    width: 100%;
 
}


nav {
    display: flex;
    justify-content:center; 
    align-items: center;  
    border-radius:8px;
    height:50px;
    width:524px;
    position: absolute;
    margin-right: 0%;
    float: right;

}

nav a{
position: relative; 
font-size: 1.1em;
font-weight: 700;
color: #0b0707;
text-decoration: none;
padding:4px 23px;
display: inline-block;
z-index: 1;
}

nav span{
    position: absolute;
    top: 0;
    left: 0;
    width: 108px;
    height: 100%;
    background:linear-gradient(45deg, #e7b995, #ed8a71);
    border-radius:8px;
    transition:0.5s;
}

nav a:nth-child(1):hover~span{
left:10px;
width:100px;
}
nav a:nth-child(2):hover~span{
left:140px;
}
nav a:nth-child(3):hover~span{
left:259px;
width: 110px;
}
nav a:nth-child(4):hover~span{
left:389px;
width: 115px;
}

</style>



</head>
<body>

<div class="logo" > 
    <a href="./home.php"><img src="./SAVE_BLOODY_LIVES-removebg-preview.png" alt=""></a>
</div>

<nav>
        
     
    <a href="./about.php">About Us</a>


    <a href="./donate.php">Donation</a>


    <a href="./exp.php">Transfusion</a>


    <a href="./contact.php">Contact Us</a>
<span>
</span>
</nav>

<?php 
         
         include("php/config.php");

         if(isset($_POST['submit'])){
            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $email = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];
            $age = $_POST['age'];
            $address1 = $_POST['address1'];
            $address2 = $_POST['address2'];
            $address3 = $_POST['address3'];
            $address4 = $_POST['address4'];
            $address5 = $_POST['address5'];
            $gender = $_POST['gender'];
            $bloodgroups = $_POST['bloodgroups'];
            $diseases = $_POST['diseases'];
            $description = $_POST['description'];

            mysqli_query($con,"INSERT INTO donor(Email,Age,Phonenumber,Firstname,Lastname,Address1,Address2,Address3,Address4,Address5,Bloodgroups,Diseases,Description,Gender) VALUES('$email','$age','$phonenumber','$firstname','$lastname','$address1','$address2','$address3','$address4','$address5','$bloodgroups','$diseases','$description','$gender')") or die("Error Occured");
            echo '<script>alert("Donor registered successfully! Thank you.")</script>';
            
            header("Location: about.php");
        }

        
        else
         
        ?>
<div style="padding-top: 80px; ">
    <form action="" method="post">
        <div class="input-group" style="background: rgba( 255, 8, 8, 0.15 ); box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ); backdrop-filter: blur( 0px ); -webkit-backdrop-filter: blur( 0px ); border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.18 );">
            <div class="input-field" id="namefield">
                <i class="fa-solid fa-user"></i>
                <b>Donor Name:</b>
                <br>
                <input type="text" placeholder="First name" name="firstname">
                <input type="text" placeholder="Last name" name="lastname">
            </div>


            <div class="input-field">
                <i class="fa-solid fa-lock"></i>
                <b>Age:</b>
                <br>
                <input type="number" placeholder="" name="age">
            </div>

            <div class="input-field">
                <i class="fa-solid fa-lock"></i>
                <b>Gender:</b>
                <br>
                <input type="radio" value="Male" name="gender">Male<br>
                <input type="radio" value="Female" name="gender">Female<br>
                <input type="radio" value="Other" name="gender">Other
            </div>

            <div class="input-field">
                <i class="fa-solid fa-lock"></i>
                <b>Email:</b>
                <br>
                <input type="email" placeholder="Email" name="email">
            </div>

            <div class="input-field">
                <i class="fa-solid fa-lock"></i>
                <b>Phone number:</b>
                <br>
                <input type="text" placeholder="Phone Number" name="phonenumber">
            </div>

            <div class="input-field">
                <i class="fa-solid fa-lock"></i>
                <b>Address:</b>
                <br>
                <input type="text" placeholder="Street Address" name="address1"><br>
                <input type="text" placeholder="Street Address line 2" name="address2"><br>
                <input type="text" placeholder="City" name="address3">
                <input type="text" placeholder="State" name="address4"><br>
                <input type="number" placeholder="Pincode" name="address5">
            </div>

            <div class="input-field">
                <i class="fa-solid fa-lock"></i>
                <b>Blood group:</b>
                <br>
                <select name="bloodgroups" id="bg" >
                    <option value="" disabled selected>Blood group</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="AB-">A-</option>
                    <option value="AB+">A-</option>
                  </select>
            </div>

            <div class="input-field">
                <i class="fa-solid fa-lock"></i>
                <b>Do you suffer with any diseases?</b>
                <br>
                <input type="radio" value="Yes" name="diseases">YES<br>

                <input type="radio" value="No" name="diseases">NO
            </div>


            <div class="input-field">
                <i class="fa-solid fa-lock"></i>
                <b>If yes specify:</b>
                <br>
                <input type="text" placeholder="Name of disease" name="description" class="describe">
            </div>



            <input type="submit" name="submit" id="submitBtn" value="SUBMIT" class="wrap">
</div>
</body>
</html>