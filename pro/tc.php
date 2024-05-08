<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Condition</title>


<style>


body{
    background-image: url(https://img.freepik.com/free-vector/different-colorful-watercolor-backgrounds_1340-8979.jpg?w=740&t=st=1708597362~exp=1708597962~hmac=331ee02bc1a497b52d84bf2ec011772034204d277674c3de5ff0d2b2fb8ce231);
    background-size: cover;
    background-position: center;
    
}

h1{
    font-family:Georgia, 'Times New Roman', Times, serif;
    font-size: 20px;
    padding-bottom: 2%;
}

p{
    font-family: 'Times New Roman', Times, serif;
    font-size: 17px;
    margin-left: 1%;
    
}

input[type=checkbox] {
    border: 0px;
    width: 4%;
    height: 2em;

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


div {
  margin-bottom: 10px;
}

html input[type="CheckBox"] {
    transform: scale(1.5);
}

.yes{
    font-size:25px
   
}

</style>




</head>


<body>
    <h1><u>The criteria for the donor are:</u> </h1>
<p>1.Weight should not be less than 45 kgs.</p><br>
 <p>2.Age should be between 18 and 65.</p><br>
<p>3.Blood pressure should be within normal limits for the age group.</p><br>
<p>4.Pulse and temperature should be normal.</p><br>
<p>5.Haemoglobin should be not less than 12.5 grams.</p><br>
<p>6.If the donor has suffered from malaria, a period of 3 months must have passed since full recovery was completed. If the donor resides in a place where malaria is endemic, a period of 3 years must have elapsed since the recovery was complete.</p><br>
<p>7.The donor should not have had any immunization/vaccination for cholera, typhoid, diphtheria, tetanus, plague, or gammaglobulin in 15 days preceding the blood donation. In the case of rabies vaccination, 1 year must have elapsed since the vaccination.</p><br>
<p>8.There should not have been any acupuncture treatment in the last 1 year.</p><br>
<p>9.No tattoos should have been done anywhere on the body for 1 year.</p><br>
<p>10.Before the donation begins, a check will be done to see if there are any scars or puncture marks on the arms and forearms that may indicate drug use or frequent blood donation.</p><br>
<p>11.The donor should not be having any form of cancer.</p><br>
<p>12.The donor must not be suffering from tuberculosis, leprosy, hepatitis B or C, or HIV.</p><br>
<p>13.The donor should not be having any heart disease or ailment.</p><br>
<p>14.The donor must not have asthma, epilepsy, thalassemia, sickle cell anaemia, polycythemia vera, or similar conditions.</p><br>
<p>15.The donor should not suffer from any bleeding disorder or be on steroids.</p><br>
<p>16.In the case of dental treatments, 3 days must have passed since a tooth extraction, root canal treatment, other surgery, gum autograft or implant, or similar treatment.</p><br>
<p>17.A person with diabetes may be a donor if it is being controlled by diet or oral medication. No donation is accepted if the treatment is the condition by way of insulin injections.</p><br>
<p>18.High-risk individuals with a history of drug addiction, sexually transmitted diseases, having multiple sex partners, or other high-risk activities will not be accepted for blood donation.</p><br>
<p>19.Various medications may prevent a person from donating blood.</p><br>
<p>20.For women, a period of one year must have passed since childbirth and the stopping of breastfeeding.</p><br>





    <div class="yes">
        <h1>Do you agree with the terms and conditions?  </h1> <input type="checkbox" id="lang1" name="yes" value="YES"> Yes  
    </div>
       </legend>

  

<div class="btn-field">
    <button type="button" name="submit" id="submitBtn" class="disable">SUBMIT</button>

    </div>
   <!-- <input type="submit" name="submit" id="submitBtn" value="SUBMIT" class="wrap">-->
<script>

let submitBtn= document.getElementById("submitBtn");

submitBtn.onclick=function(){
alert("Thank you!")
location.href='donate.php';
}
</script>


</body>
</html>