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

    <title>Donations</title>
</head>

<bod>

  <?php include 'header.php'; ?>
    <!-- Navigator Start -->
    <section id="navigator">
        <div class="container">
            <div class="path">
                <div class="path-main" style="color: darkred; display:inline-block;">Home</div>
                <div class="path-directio" style="color: grey; display:inline-block;"> / Donations</div>
            </div>

        </div>
    </section>
    <!-- Navigator End -->

    <!-- Requests Start -->
    <section id="requests">
        <div class="title">
            <h2>Donations</h2>
            <hr class="line">
        </div>
        <div class="container">
                <?php
            include 'db_Conn.php';
            $limit=10;
           if(isset($_GET['page'])){
                   $page=$_GET['page'];
              }
             else{
               $page=1;
              }
       $offset = ($page-1) *$limit;
       $count = $offset+1;
      $q= "select * from donor_details inner join city on donor_details.donor_city = city.city_name order by rand() limit 5"; 
      $result = mysqli_query($conn, $q) or die('Query unsuccessful.');
      if(mysqli_num_rows($result)>0){
      while ($row=mysqli_fetch_assoc($result)){
          $total_Records= mysqli_num_rows($result);
         $total_pages= ceil($total_Records / $limit);
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
        <?php  }
                 } 
                 else{
                    echo '<div class="alert alert-danger">No Donor Found For your search Blood group </div>';
                 }
                 ?>
                </div>
            </div>
                </div>         
        </div>
        <div class="page-num">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
        </div>
    </section>
    <!-- Requests End -->

   <?php include 'footer.php'; ?>

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