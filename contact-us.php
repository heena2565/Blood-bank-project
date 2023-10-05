<?php include 'db_conn.php';?>
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

    <title>Contact Us</title>
</head>

<body>
    <?php 
    include('header.php');
    ?>
    <?php
if(isset($_POST['send'])){
$name=$_POST['fullname'];
$number=$_POST['contactno'];
$email=$_POST['email'];
$message=$_POST['message'];
$sql= "insert into contact_query (query_name,query_mail,query_number,query_message) values('{$name}','{$number}','{$email}','{$message}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");
echo '<div class="alert alert-success alert_dismissible"><b><button type="button" class="close" data-dismiss="alert">&times;</button></b><b>Query Sent, We will contact you shortly. </b></div>';
}?>
 <br><br>

    <!-- login Start -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 call">
                    <div class="title">Contact Details</div>
                    <img src="imgs/logo.png" alt="">
                    <hr>
                    <h4>Mobile: +91 7837286361</h3>
                        <h4>Fax: +4 55 6646</h3>
                            <h4>Email: InfoBloodBank@gmail.com</h3>
                                <hr>
                                <h3>Find Us On</h3>
                                <div class="icons">
                                    <i class="fab fa-facebook-square fa-3x"></i>
                                    <i class="fab fa-google-plus-square fa-3x"></i>
                                    <i class="fab fa-twitter-square fa-3x"></i>
                                    <i class="fab fa-whatsapp-square fa-3x"></i>
                                    <i class="fab fa-youtube-square fa-3x"></i>
                                </div>
                </div>
                <div class="col-md-6 info">
                    <div class="title">Contact Us</div>
                    <form name="sentMessage" method="post" action="">
                        <input type="text" name="fullname" id="" placeholder="Name" required="">
                        <input type="email" name="email" id="" placeholder="Email" required="">
                        <input type="number" name="contactno" id="" placeholder="Phone" required="">
                        <textarea name="message" id="" cols="10" rows="5" placeholder="Message"></textarea>
                        <div class="reg-group">
                            <button type="submit" name="send">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- login End -->

   <?php 
   include('footer.php');
   ?>

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