<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
include 'db_Conn.php';
?>
<html>
    <head>
        <title>Donate Blood</title>
        <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <link rel="stylesheet" href="stylesheet.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
      <div class="header"  height="fit-content">
            <?php 
            $active="donate";
            include('header.php');
            ?>
        </div>
        <?php 
        if(isset($_POST["submit"])){
            $name=$_POST['fullname'];
            $number = $_POST['mobileno'];
            $email= $_POST['email'];
            $age=$_POST['age'];
            $gender=$_POST['gender'];
            $bloodgroup=$_POST['blood'];
            $city_name= $_POST['city_name'];
            $hospital_name = $_POST['hospital_name'];
           $q = "insert into donor_details(donor_name,donor_number, donor_mail,donor_age, donor_gender,donor_blood, donor_city, hospital_name)
            values('{$name}', '{$number}', '{$email}', '{$age}', '{$gender}','{$bloodgroup}', '{$city_name}', '{$hospital_name}')";
              $result= mysqli_query($conn, $q) or die("query unsuccessful");
              echo '<div class="alert alert-success alert_dismissible"><b><button type="button" class="close" data-dismiss="alert">&times;</button></b><b>Request Sent, We will contact you shortly. </b></div>';
        }
        ?>
         <!-- Navigator Start -->
    <section id="navigator">
        <div class="container">
            <div class="path">
                <div class="path-main" style="color: darkred; display:inline-block;">Home</div>
                <div class="path-directio" style="color: grey; display:inline-block;"> / Donate Blood</div>
            </div>

        </div>
    </section>
    <!-- Navigator End -->

        <div id="page-container" style=" position:relative; min-height: 74vh;">
          <div class="container">
            <div class="container-wrap"  style="padding:20px;">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="mt-4 mb-3">Donate Blood</h1>
                    </div>
                </div>
               <form name="donor" action="#" method="post" >
                <div class="row">
                <div class="col-lg-4  mb-4">
                    <div class="font-italic">Full Name<span style="color: red;">*</span></div>
                    <div><input type="text" name="fullname" class="form-control" required></div>
                </div>
                <div class="col-lg-4  mb-4">
                    <div class="font-italic">Mobile Number<span style="color: red;">*</span></div>
                    <div><input type="text" name="mobileno" class="form-control" required></div>
                </div>
                <div class="col-lg-4  mb-4">
                    <div class="font-italic">Email Id<span style="color: red;">*</span></div>
                    <div><input type="email" name="email" class="form-control" required></div>
                </div>
              </div>
                <div class="row">
                      <div class="col-lg-4  mb-4">
                          <div class="font-italic">Age<span style="color: red;">*</span></div>
                          <div><input type="number" name="age" class="form-control" required></div>
                      </div>
                       <div class="col-lg-4  mb-4">
                          <div class="font-italic">Gender<span style="color: red;">*</span></div>
                             <div><select type="radio" name="gender" class="form-control" required>
                                    <option value="">select</option>
                                    <option value="Male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">others</option>
                                  </select>
                             </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                              <div class="font-italic">Blood Group<span style="color: red;">*</span></div>
                              <div ><select name="blood" class="form-control" required>
                                     <option value="" selected disabled>Select</option>
                                     <?php
                                     $sql= "select * from blood";
                                     $result=mysqli_query($conn, $sql) or die("query unsuccessful");
                                     while($row=mysqli_fetch_Assoc($result)){
                                        ?>
                                 <option value="<?php echo $row['blood_group']; ?>"><?php echo $row['blood_group'] ?> </option>
                                <?php } ?>     
                                </select>
                              </div>
                        </div>     
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="font-italic">City<span style="color: red;">*</span></div>
                        <div><input type="text" name="city_name" class="form-control" required></div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="font-italic">Nearest Center<span style="color: red;">*</span></div>
                        <div><input type="text" name="hospital_name" class="form-control" required></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div><input name="submit"  id="submit" type="submit" class="btn btn-primary" value="Submit" style="background-color:#ff4d4d;cursor: pointer; border:none;" ></div>
                        <p id="demo"></p>
                    </div>
                </div>
               </form>
            </div>
          </div>
        </div>
      

    <?php
    include('footer.php');
    ?>
   

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
      
    </body>
</html>