<?php include 'db_Conn.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Need Blood</title>
        <link rel="stylesheet" href="stylesheet.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
   
        <?php 
        include('header.php');
        ?>
    <?php
    if(isset($_POST['submit'])){
    $name= $_POST['fullname'];
    $phone= $_POST['mobileno'];
    $reason= $_POST['reason'];
    $bloodgroup = $_POST['blood'];
    $sql="insert into needblood(name, phone, reason, bloodgroup) values('{$name}', '{$phone}', '{$reason}', '{$bloodgroup}')";
     $result = mysqli_query($conn,$sql);
     echo '<div class="alert alert-success alert_dismissible"><b><button type="button" class="close" data-dismiss="alert">&times;</button></b><b>Request Sent, We will contact you shortly. </b></div>';
    }
   
     mysqli_Close($conn);  
  ?>

   <!-- Navigator Start -->
   <section id="navigator">
        <div class="container">
            <div class="path">
                <div class="path-main" style="color: darkred; display:inline-block;">Home</div>
                <div class="path-direction" style="color: grey; display:inline-block;"> / Need Blood</div>
            </div>

        </div>
    </section>
    <!-- Navigator End -->

    <div id="page-container" style="position: relative; min-height: 74vh;">
        <div class="container">
            <div id="container-wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="mt-4 mb-3">Need Blood</h1>
                    </div>
                </div>

                <form name="needblood" action="" method="post">
                <div class="row">
                     <div class="col-lg-4 mb-4">
                         <div class="font-italic">Full name<span style="color:red;">*</span></div>
                          <div><input type="text" name="fullname" class="form-control" required></div>
                     </div>
                    <div class="col-lg-4 mb-4">
                      <div class="font-italic">Mobile Number<span style="color:red">*</span></div>
                      <div><input type="text" name="mobileno" class="form-control" required></div>
                    </div>
                        <div class="col-lg-4 mb-4">
                            <div class="font-italic">Blood Group<span style="color: red;">*</span></div>
                                 <div><select name="blood" class="form-control" required>
                                  <option value="" selected disabled>Select</option> 
                                  <?php
                                  include 'db_Conn.php';
                                  $q= "select * from blood";
                                  $result= mysqli_query($conn, $q) or die("query unsuccessful");
                                  while($row= mysqli_fetch_assoc($result)){
                                    ?>
                                    <option value="<?php echo $row['blood_group']; ?>" ><?php echo $row['blood_group']; ?></option>
                                    <?php }
                                  ?>    
                                  </select>
                                 </div>
                        </div>
                        &emsp; <div class="row">
                          <div class="col-lg-12 mb-4">

                             <div class="font-italic">Reason, Why you need blood?<span  style="color: red;">*</span></div>
                              <div><textarea class="form-control" name="reason" required></textarea></div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div><input type="submit" name="submit" class="btn btn-primary" value="Submit" style="cursor: pointer; background-color: #ff4d4d; border: none;"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--<div class="row">
     <div class="col-lg-4  col-sm-6 portfolio-item"><br>
        <div  class="card" style="width: 300px;">
            <img class="card-img-top" src="" alt="card"  style="width: 100%; height: 300px;">
            <div class="card-body">
                <h3 class="card-title"></h3>
                <p class="card-text">
                    <b>Blood Group:</b>
                    <b>Mobile No.:</b>
                    <b>Gender:</b>
                    <b>Age:</b>
                    <b>Address:</b>
                </p>
            </div>

        </div>
    </div>
  </div>-->

    </body>
    <?php
    include('footer.php');
    ?>
</html>