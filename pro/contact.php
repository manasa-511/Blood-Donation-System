<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
<style>

*{
 margin:0;
padding: 0;
box-sizing: border-box;
font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

}

nav {
    display: flex;
    justify-content:center; 
    align-items: center;  
    border-radius:8px;
    height:50px;
    width:654px;
    position: absolute;
    margin-right: 0%;
    float: right;

}

nav a{
position: relative; 
font-size: 1.5em;
font-weight: 700;
color: #0b0707;
text-decoration: none;
padding:4px 23px;
display: inline-block;
z-index: 1;
}



a{
    position: relative;
    font-size:18px;
    font-weight: 700;
    color: #ffbebe;
    text-decoration: none;
    padding: 0 20px;
    font-family:'Times New Roman', Times, serif
    
    }
 a:after{
    content: " ";
    position: absolute;
    left:0;
   bottom:-20%;
    background-color:#990332a5;
    width:0;
    height:3px;
}
a:hover{
    color: #303030;
}
a:hover:after{
    width:100%;
    transition: 0.4s;
}

.logo img{
    width: 120px; 
    height: 120px;
   position: absolute;
   top:0;
   left:0;
    
}

body{
    background-image: url(https://img.freepik.com/free-vector/different-colorful-watercolor-backgrounds_1340-8979.jpg?w=740&t=st=1708597362~exp=1708597962~hmac=331ee02bc1a497b52d84bf2ec011772034204d277674c3de5ff0d2b2fb8ce231);
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center; 
    align-items: start;  
    min-height:100vh;
    padding:2%;
}


.info{
    margin-top:10%;

}
.info p{
    font-size: 25px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: rgb(0, 0, 0);
}

.info img{
    width: 5%;
    border-radius: 50%;
  margin-top:2%;
  align-items:center;
    
}
.info h5{
    color: rgb(5, 7, 9);
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 30px;
}



hr{
  border: 3px solid black;
  
}


.info .last a{
    color: #000;
    font-size:20px;
    
}


.info .last{
    background: rgba(0, 0, 0, 0.2);
    border-radius: 0.3em;
    margin-top:2%;
    margin-bottom:3%;
   padding-left:50%;
}

</style>

</head>
<body>

<div class="logo"> 
    <img src="./SAVE_BLOODY_LIVES-removebg-preview.png">
</div>

<nav>
        
     
    <a href="./about.php">About Us</a>


    <a href="./tc.php">Donation</a>


    <a href="./transfusion.php">Transfusion</a>


    <a href="./contact.php">Contact Us</a>
<span>
</span>
</nav>


<section>


    <div class="info">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/2048px-2021_Facebook_icon.svg.png" alt="" class="fIcon">
<h5>Facebook</h5>
<p>@blooddonation</p>

<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdTcd9n76DdsUZuZPP63Qh92xL4CK6w2JKjA&usqp=CAU" alt="" class="fIcon">
<h5>Twitter</h5> 
<p>@blooddonation</p>
<img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="" class="fIcon">
<h5>Instagram</h5>
<p>Blood_donation_system</p>
<img src="https://www.shareicon.net/data/512x512/2015/08/28/92444_whatsapp_512x512.png" alt="" class="fIcon">
<h5>Whatsapp</h5>
<p>9xxxxxxx98</p>

<br>

<hr>


<div class="last">
    <br>
    <br>
<p><a href="about.php">About Us</p></a>
<br>
<p><a href="donate.php">Donate</p></a>
<br>
<p><a href="transfusion.php">Transfusion</p></a><br>
<p><a href="contact.php">Contact</p></a>
<br>
<br>
</div>
</div>


</section>


<script src="about.js"></script>

</body>
</html>