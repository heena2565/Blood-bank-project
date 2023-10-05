<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <style>
      #sidebar{
        position: relative;
        margin-top: 0;
      }
      #content{
        position: relative;
        margin-left: 210px;
      }
      @media screen and (max-width:600px){
        #content{
          position: relative;
          margin-left: auto;
          margin-right: auto;
        }
      }

    </style>
</head>
<body style="color: black;">
<?php 
include 'conn.php';
include 'session.php';
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ==true){
?>
    <div id="sidebar">
     <?php 
     $active="dashboard";
     include 'sidebar.php';
     ?>
    </div>
    <div id="content">
      <div class="conternt-wrapper">
         <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 lg-12 sm-12">
                <h1 class="page-title" style="color: black;">Dashboard</h1>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-3">
                  <div class="panel panel-default panel-info" style="border-radius: 50px;">
                   <div  class="panel-body panel-info bk-primary text-light" style="background-color: #9fffca; border-radius:50px;">
                    <div class="start panel text-center" style="background-color: #9fffca; border-radius:50px;">
                    <?php 
                    $q= "select * from donor_details";
                    $result = mysqli_query($conn, $q) or die("query unsuccessful");
                    $rows = mysqli_num_rows($result);
                    ?>
                      <div class="start-panel-number h1"><?php echo $rows; ?></div>
                      <div class="start-panel-title text-uppercase">Blood Donor Available</div>
                      <br>
                      <button class="btn btn-danger" onclick="window.location.href='donor_list.php';">
                        Full Detail <i class="fa fa-arrow-right"></i>
                      </button>
                    </div>
                  </div>
                 
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="panel panel-default panel-info" style="border-radius: 50px;">
                   <div  class="panel-body panel-info bk-primary text-light" style="background-color: #88badd; border-radius:50px;">
                    <div class="start panel text-center" style="background-color: #88badd">
                    <?php
                    $q1= "select * from contact_query";
                    $result1= mysqli_query($conn, $q1) or die("query failed.");
                    $rows = mysqli_num_rows($result1); 

                    ?>
                    <div class="start-panel-number h1"><?php echo $rows; ?></div>
                      <div class="start-panel-title text-uppercase" >All User Queries</div>
                      <br>
                      <button class="btn btn-danger" onclick="window.location.href='query.php';">
                        Full Detail <i class="fa fa-arrow-right"></i>
                      </button>
                    </div>
                  </div>
                 
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="panel panel-default panel-info" style="border-radius: 50px;">
                   <div  class="panel-body panel-info bk-primary text-light" style="background-color: #fd97f8; border-radius:50px;">
                    <div class="start panel text-center"  style="background-color: #fd97f8; border-radius:50px;">
                    <?php
                    $q2 = "select * from contact_query where query_status =2 ";
                    $result2= mysqli_query($conn, $q2)or die("query failed.");  
                    $rows = mysqli_num_rows($result2);
                    ?>
                    <div class="start-panel-number h1"><?php echo $rows?></div>
                      <div class="start-panel-title text-uppercase">Pending Queries</div>
                      <br>
                      <button class="btn btn-danger" onclick="window.location.href='pending_query.php';">
                        Full Detail <i class="fa fa-arrow-right"></i>
                      </button>
                    </div>
                  </div>
                 
                  </div>
                </div>

              </div>
            </div>

          </div>


      </div>
    </div>

    <?php 
} else{
  echo '<div class="alert alert-danger"><b>Please Login First To Access Admin Portal.</b></div>';
  ?>
  <form method="post" name= "" action ="index.php" class="form-horizontal">
      <div class="form-group">
         <div class= "col-sm-8 col-sm-offset-4" style="float:left">
            <button class="btn btn-primary" name="submit" type="submit">Go To Login Page</button>
       </div>
      </div> 
   </form>
 <?php } ?>

</body>
</html>