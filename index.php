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

    <title>Blood Bank</title>
</head>

<body>
<?php include('header.php'); ?>
    

    <!-- Header Start -->
    <section id="header">
        <div class="container">
            <!-- <h1>We are seeking for a better community health.</h1>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora repellat inventore nemo repudiandae
                ipsum quos.</h4>
            <button class="btn more" onclick= "window.location.href = 'About-us.php';">More</button> -->
        </div>
    </section>
    <!-- Header End -->

    <!-- Sub Header Start -->
    <section id="sub-header">
        <div class="container">
            <h3>A SINGLE PINT CAN SAVE THREE LIVES, A SINGLE GESTURE CAN CREATE A MILLION SMILES.</h3>
        </div>
    </section>
    <!-- Sub Header End -->

    <!-- Articles Start -->
            <section id="articles">
                <div class="container">
                    <h2 style="display: inline-block;">Articles</h2>
                    <div class="swiper-container">
                        <div class="button-area" style="display: inline-block; margin-left: 850px;">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            </button>
                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-img-top" style="position: relative;">
                                        <img src="imgs/p3.jpg" alt="Card image">
                                        <button class="like"><i class="fas fa-heart icon-large"></i></button>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Blood Types</h4>
                                        <p class="card-text">Blood types are classified based as:
 There are four main blood types: A, B, AB, and O. 
These are determined by the presence or absence of two antigens, A and B, on the surface of red blood cells.
 Blood type A has A antigens, blood type B has B antigens, blood type AB has both A and B antigens, and blood type O has neither A nor B antigens. 
</p>
                                        <div class="btn-cont">
                                            <button class="card-btn"
                                                onclick="window.location.href = 'article.php';">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-img-top" style="position: relative;">
                                        <img src="imgs/p4.jpg" alt="Card image">
                                        <button class="like"><i class="fas fa-heart icon-large"></i></button>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Donations Benefits</h4>
                                        <p class="card-text">
                                        Donating blood is a noble act with a multitude of benefits. Firstly, it's a lifesaving endeavor;
                                         a single donation can potentially save up to three lives by providing crucial blood components needed for medical treatments, surgeries, and emergencies. 
                                         Ensuring your well-being while helping maintain balanced iron levels in your body. </p>
                                        <div class="btn-cont">
                                            <button class="card-btn"
                                                onclick="window.location.href = 'article.php';">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card ">
                                    <div class="card-img-top" style="position: relative;">
                                        <img src="imgs/p1.jpg" alt="Card image">
                                        <button class="like"><i class="fas fa-heart icon-large"></i></button>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Disease Protection</h4>
                                        <p class="card-text">Donating blood not only saves lives but also plays a crucial role in disease protection. 
                                        Regular blood donations help reduce the risk of several diseases, including heart disease and cancer, by maintaining healthy iron levels in the body.
                                        <div class="btn-cont">
                                            <button class="card-btn"
                                                onclick="window.location.href = 'article.php';">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-img-top" style="position: relative;">
                                        <img src="imgs/p5.jpg" alt="Card image">
                                        <button class="like"><i class="fas fa-heart icon-large"></i></button>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">How To Donate?</h4>
                                        <p class="card-text">To get started, ensure you meet the eligibility criteria, 
                                        which typically include being at least 17 years old, weighing a minimum of 110 pounds, and being in good health.
                                         Once you've confirmed your eligibility, find a nearby blood donation center or mobile blood drive, 
                                        often hosted by hospitals, clinics, or community organizations. </p>
                                        <div class="btn-cont">
                                            <button class="card-btn"
                                                onclick="window.location.href = 'article.php';">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Articles End -->

    <!-- Requests Start -->
    <section id="requests">
        <div class="title">
            <h2>Donations</h2>
            <hr class="line">
        </div>
        <div class="container">
           
            <?php
            include 'db_Conn.php';
                $q= "select * from donor_details inner join city on donor_details.donor_city = city.city_name order by rand() limit 3"; 
                 $result = mysqli_query($conn, $q) or die('Query unsuccessful.');
                 if(mysqli_num_rows($result)>0){
                    while ($row=mysqli_fetch_assoc($result)){
                  ?> 

            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="type">
                                <h2><?php  echo $row['donor_blood']; ?></h2>
                            </div>
                        </div>
                        <div class="data col-lg-6">
                            <h4>Name:<?php echo $row['donor_name']; ?></h4>
                            <h4> Cenetr:<?php echo $row['hospital_name']; ?></h4>
                            <h4 name="city_name"> City:<?php echo $row['city_name']; ?> </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div>
            <br>          
        </div>
        <?php }
                 } 
                 else{
                    echo '<div class="alert alert-danger">No Donor Found For your search Blood group </div>';
                 }
                 ?>
                 <div class="more-req">
                <button onclick= "window.location.href = 'requests.php';">More</button>
            </div>
    </section>
    
    <!-- Requests End -->

    <!-- Call us Start -->
    <section id="call-us">
        <div class="layer">
            <div class="container">
                <h1>Call Us</h1>
                <h4>You can call us for your inquiries about any information.</h4>
                <div class="whats">
                    <img src="imgs/whats.png" alt="">
                    <h3> +91 7837286361</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Call us End -->

    <!-- App Start -->
    <section id="app">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info">
                        <h1>Blood Bank Application</h1>
                        <h3>"Stay connected to saving lives! Download the Blood Bank app today and become a hero in your community."</h3>
                        <h4>Available On</h4>
                        <img src="imgs/ios.png" alt="">
                        <img src="imgs/google.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="app-screen" src="imgs/App.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- App End -->

  <?php include('footer.php'); ?>

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