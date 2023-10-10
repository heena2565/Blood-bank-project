<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />


    <!-- website font  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <title>Why donate blood?</title>
</head>
<body>

<?php 
$currentPage="whydonateblood";
include('header.php'); ?>
    

    <!-- Navigator Start -->
    <section id="navigator">
        <div class="container">
            <div class="path">
                <div class="path-main" style="color: darkred; display:inline-block;">Home</div>
                <div class="path-directio" style="color: grey; display:inline-block;"> / Why Donate Blood?</div>
            </div>

        </div>
    </section>
    <!-- Navigator End -->

    <!-- Who Start -->
    <section id="who">
        <div class="container">
                <img src="imgs/logo.png" alt="">
                <p>
                <span style="color:black; font-family:&quot;Open Sans&quot;, Arial, sans-serif; font-size:16px;  text-align:justify;">
                    Blood is the most precious gift that anyone can give to another-A gift of life.
                     A decision to donate your blood can save a life, or even several if your blood is separated to its components-red cells, platelets and plasma- which can be used individually for patients with specific conditions.
                     Safe blood saves lives and improves health. Blood transfusion is needed for:</span>
                     <br><br>
<ul style="color:black; font-family:&quot;Open Sans&quot;, Arial, sans-serif; font-size:16px;  text-align:justify;">
    <li>Women with complications of pregnancy, such as ectopic pregnancies and haemorrage before, during and after childbirth.</li>
    <li>People with severe trauma following man-made and natural disasters.</li>
    <li>Children with severe anaemia often resulting from malaria or malnutrition.</li>
    <li>Many complex medical and surgical procedures and cancer patients.</li>
    </ul><br>

<span style=" font-family:&quot;Open Sans&quot;, Arial, sans-serif; font-size:16px;  text-align:justify;">
It is also needed for regular transfusion for people with conditions such as thalassaemia and sickle cell disease and is used to make products as clotting factors for people with homophilia. There is a constant need for regular blood supply cause blood can be stored for only a limited time before use.
Regular blood donations by a sufficient number of healthy people needed to ensure that safe blood will be available whenever wherever needed.
           </span>     </p>
        </div>
    </section>
    <!-- Who End -->

    <!-- Footer Start -->
  <?php include('footer.php'); ?>
    <!-- Footer End -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript" src="js/swiper.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>