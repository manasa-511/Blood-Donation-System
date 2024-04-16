<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

        .container
        {
            width:70%;
            height:95%;
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.24);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius:30px;
            padding:60px;
        }

        .carousel-item img {
            width: 100vw;
            height: 100vh;
        }

        .about-section {
            height:100vh;
            width: 100vw;
            background-image: url('https://www.shutterstock.com/shutterstock/videos/1085398883/thumb/1.jpg?ip=x480'); /* New background image */
            background-size: cover;
            color: #000000; /* Black font color */
            padding: 100px 0;
            text-align: center;
        }

        .about-section h2 {
            font-size: 40px; /* Increased font size */
            font-weight:900;
            margin-bottom:30px;
        }

        .about-section p {
            font-size: 24px; /* Increased font size */
            line-height: 1.6;
            margin-bottom: 30px;
            font-weight:600;
        }
    </style>
</head>
<body>

<div id="logo">
        <a href="./home.php"><a href="./home.php"><img src="./SAVE_BLOODY_LIVES-removebg-preview.png" style="position: absolute; z-index: 1; width: 120px;
            height: 120px; float: left;"></a>
</div>

<div style="position: absolute; margin-left: 88%; margin-top:1.5% ; z-index: 1;">
    <a class="btn btn-md btn-primary" href="register.php">Sign up</a> <a class="btn btn-md btn-primary" href="index.php">Log in</a>
</div>


<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style=" z-index:-1">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
    <div class="carousel-item active"> <img style="max-width=500px" src="https://emedia1.nhs.wales/ABMUhb/cache/file/3CD9FC27-7534-4906-AE554069B155D913_carouselimage.jpg" class="d-block w-100" alt="Slide 1"> <div class="carousel-caption d-none d-md-block"> <h1 style="color:#080000">WELCOME!</h1> <p></p> </div> </div> <div class="carousel-item"> <img style="max-width=500px" src="https://images.healthshots.com/healthshots/en/uploads/2022/06/14090406/blood-donor-1600x900.jpg" class="d-block w-100" alt="Slide 2"> <div class="carousel-caption d-none d-md-block text-end"> <h1 style="color:#080000">Donate blood</h1> <p style="font-size:20px">Blood donation is a voluntary procedure that can help save lives.</p> </div> </div> <div class="carousel-item"> <img style="max-width=50px" src="https://assets-global.website-files.com/6298fcd2f4f19a2f4a317fec/6298fcd3f4f19a1967318c92_why%20do%20blood%20test%20results%20vary%20-%20imaware.jpg" class="d-block w-100" alt="Slide 3"> <div class="carousel-caption d-none d-md-block text-start"> <h1 style="color:#080000">Blood Transfusion</h1> <h4 style="color:#080000">Blood transfusion is generally the process of receiving blood</h4> <h4 style="color:#080000">or blood products intravenously.</h4> </div> </div> <div class="carousel-item"> <img style="max-width=500px" src="https://healthmatters.nyp.org/wp-content/uploads/2023/05/blood-donation-guidelines-hero.jpg" class="d-block w-100" alt="Slide 4"> <div class="carousel-caption d-none d-md-block text-end"> <h1>It Costs Nothing Give blood and stay healthy!</h1> </div> </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



<div class="about-section" style="z-index:-1;" >
    <div class="container">
        <h2>About Blood Donation</h2>
        <p>Blood donation is a vital contribution to public health and a generous act that saves lives. Donated blood is used in various medical procedures, including surgeries, trauma care, and treatments for various medical conditions such as cancer and anemia. Every donation can make a significant difference, and each pint of blood can potentially save up to three lives. Donating blood is safe, simple, and the need for blood is constant. It's a gesture of kindness and compassion that has a profound impact on the lives of those in need.</p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>