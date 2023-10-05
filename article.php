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

    <title>Article</title>
</head>

<body>
<?php 
include('header.php');
?>
 <!-- Navigator Start -->
 <section id="navigator">
    <div class="container">
        <div class="path">
            <div class="path-main" style="color: darkred; display:inline-block;">Home</div>
            <div class="path-directio" style="color: grey; display:inline-block;"> / Articles</div>
        </div>

    </div>
</section>
<!-- Navigator End -->
    <!-- article Start -->
    <section id="article">
        <div class="container">
            <img class="head-img" src="imgs/p4.jpg" alt="">
            <div class="details-container">
                <div class="title">Donations Benefits</div>
                <p>
                   

&emsp;&emsp;Regular blood donation is linked to lower blood pressure and a lower risk for heart attacks. “It definitely helps to reduce cardiovascular risk factors,” says Dr. DeSimone.

What’s the connection? “If your hemoglobin is too high, blood donation helps to lower the viscosity of the blood, which has been associated with the formation of blood clots, heart attacks, and stroke,” Dr. DeSimone says.
<br>&emsp; &emsp; “Interestingly, these benefits are more significant in men compared to women. We think maybe it’s because women have menstrual cycles, so they do it naturally without donating blood.”

People with a condition called hereditary hemochromatosis must have blood removed regularly to prevent the buildup of iron.Fortunately, this blood can benefit others.

<br>&emsp; &emsp;“These are essentially healthy patients who are otherwise normal, but they have a gene mutation where they make too much blood, and they make too much normal blood,” Dr. Vossoughi says. “So we can use that blood.”

The New York Blood Center Hereditary Hemochromatosis Program allows people with hemochromatosis to donate blood rather than have it removed and thrown away. “Instead of having to go to a clinic or go to one of our phlebotomy centers every few months to reduce their blood volume, they can go to any local blood drive,” Dr. Vossoughi says. “That blood will then be used for somebody who needs it.”

<br>&emsp;&emsp;One blood donation can save up to three lives, according to Dr. DeSimone. People usually donate because it feels good to help others, and altruism and volunteering have been linked to positive health outcomes, including a lower risk for depression and greater longevity.

“Giving blood is a way to engage in the immediate community and help people around you,” Dr. Vossoughi adds. “People who do these types of things and engage in their community in this way tend to have better health and longer lives.”
                </p>
                <strong><a>Share this article:</a></strong>
                <div class="icons">
                    <i class="fab fa-facebook-square fa-3x"></i>
                    <i class="fab fa-google-plus-square fa-3x"></i>
                    <i class="fab fa-twitter-square fa-3x"></i>
                </div>

            </div>
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

        </div>
    </section>
    <!-- Article End -->

  <?php 
  include('footer.php'); ?>

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