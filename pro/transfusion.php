<!DOCTYPE html>
<html>
<head>
	<title>Transfusion</title>
</head>
<body>

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
 

.box{
   width:100%;
   min-height: 100vh;
   padding:5%;
    float:left;
    margin-top:7%;
}

.search-bar{
width: 100%;
max-width: 700px;
background: rgba(255,255,255,0.2);
display:flex;
justify-content:center;
align-items:center;
border-radius: 60px;
padding: 10px 20x;
margin-right:-20%;
}

img{
    width: 50px;
    border-radius: 50%;
    border: 0;
    background: transparent;
}
.search-bar button{
    border-radius: 50%;
    border:0;
    background: transparent;
    cursor: pointer;
    width: 10%;
}

.search-bar input{
    background: transparent;
    flex:1;
    border:0;
    outline: none;
    padding:20px 20px;
    font-size: 20px;
    color:#26236a;

}
::placeholder{
    color: #666487;
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

.btn-field{
    width: 100%;
    display: flex;
    justify-content: start;
}
.btn-field button{
    background: #eaeaea;
  border: none;
  color: rgb(19, 1, 1);
  padding: 12px 20px;
  text-decoration: none;
  margin: 10px 6px;
  cursor: pointer;
  border-radius: 10px;
  align-items: center;
}

.btn-field button.disable:hover{
    background: #080000  ;
    color:  #eaeaea;
}

.table-style{

   
  float:left;
  margin-top:12%;
  margin-right:2%;
  width:100%;
  display:flex;
  
  
    
}

</style>



</head>
<body>
<div class="logo"> 
    <img src="./SAVE_BLOODY_LIVES-removebg-preview.png">
</div>

<nav>
        
     
    <a href="./about.php">About Us</a>


    <a href="./donate.php">Donation</a>


    <a href="./transfusion.php">Transfusion</a>


    <a href="./contact.php">Contact Us</a>
<span>
</span>
</nav>

<div class="box">
<form method="post" class="search-bar">
<input type="text" placeholder="search..." name="search" >
<input type="submit" name="submit"><img src="https://icones.pro/wp-content/uploads/2021/02/loupe-et-icone-de-recherche-de-couleur-bleue.png">
</form>
</div>	

</body>
</html>

<?php

require_once('php/config.php');
error_reporting(0);
$str = $_POST["search"];
$query="select * from donors where Bloodgroups = '$str'";
$result=mysqli_query($con,$query)

?>

		<table class="table-style" border="1px">
			<tr>
				<th>Bloodgroup</th>
				<th>First Name</th>
                <th> Last Name </th>
                <th> Phone Number </th> 
                <th> Email </th> 
                <th colspan="5"> Address </th>
                <th> Gender </th>
                <th> Age </th>
                <th> Diseases </th>
                <th> About disease </th>
			</tr>

			<tr>
            <?php

            while($row=mysqli_fetch_assoc($result))
            {
                ?>

				<td><?php echo $row['Bloodgroups'] ?></td>
				<td><?php echo $row['FirstName']?></td>
                <td><?php echo $row['LastName']?></td>
                <td><?php echo $row['Phonenumber'] ?></td> 
                <td><?php echo $row['Email'] ?></td> 
                <td><?php echo $row['Address1'] ?></td>
                <td><?php echo $row['Address2'] ?></td>
                <td><?php echo $row['Address3'] ?></td>
                <td><?php echo $row['Address4'] ?></td>
                <td><?php echo $row['Address5'] ?></td> 
                <td><?php echo $row['Gender'] ?></td>
                <td><?php echo $row['Age'] ?></td>
                <td><?php echo $row['Diseases'] ?></td>
                <td><?php echo $row['Description'] ?></td>
			</tr>
            <?php
                            }
                            

                            ?>
		</table>