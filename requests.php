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

<body>

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
            $limit=5;
           if(isset($_GET['page'])){
                   $page=$_GET['page'];
              }
             else{
               $page=1;
              }
       $offset = ($page-1) *$limit;
       $count = $offset+1;
      $q= "select * from donor_details LIMIT {$offset}, {$limit}"; 
      $result = mysqli_query($conn, $q) or die('Query unsuccessful.');
      if(mysqli_num_rows($result)>0){
     ?>
            <div class="row">
                <div class="col-lg-12">
                <?php while($row=mysqli_Fetch_Assoc($result)){ ?>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="type">
                                <h2><?php  echo $row['donor_blood']; ?></h2>
                            </div>
                        </div>
                        <div class="data col-lg-6">
                            <h4>Name:<?php echo $row['donor_name']; ?></h4>
                            <h4> Cenetr:<?php echo $row['hospital_name']; ?></h4>
                            <h4 name="city_name"> City:<?php echo $row['donor_city']; ?> </h4>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
            <div>
            <br>          
        </div>
      <div class="row">
        <div class="col-lg-12 text-center" >
        <ul class="pagination justify-content-center">
        <?php
        $sql1 = "SELECT * FROM donor_details";
        $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

        if(mysqli_num_rows($result1) > 0){

          $total_records = mysqli_num_rows($result1);

          $total_page = ceil($total_records / $limit);
          if($page > 1){
            echo '<li class="page-item"><a class="page-link" href="requests.php?page='.($page - 1).'">Prev</a></li>';
          }
          for($i = 1; $i <= $total_page; $i++){
            if($i == $page){
              $active = "active";
            }else{
              $active = "";
            }
            echo '<li class="page-item '.$active.'"><a class="page-link" href="requests.php?page='.$i.'">'.$i.'</a></li>';
          }
          if($total_page > $page){
            echo '<li class="page-item"><a class="page-link" href="requests.php?page='.($page + 1).'">Next</a></li>';
          }
        }
        ?>
        </ul>
      </div>
    </div>
      </div>
      </div>
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