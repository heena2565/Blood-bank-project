<?php
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add donor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    #sidenar
    {
        position:relative;
    }
    #content{
        margin-left: 250px;
        width:80%;
        position: inherit;
    }
  </style>
</head>
<body style="color: black;">
<?php 
include 'conn.php';
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    ?>
    <div id="sidebar">
        <?php include 'sidebar.php'; ?>
    </div>
    <div  id="content">
        <div class="container-wrapper">
            <div class="row">
                <div class="col-md-12 lg-12 sm-12"><br>
                    <h1 class="page-title">Add Donor </h1>
                </div>
            </div>
            <hr>
            <form name="donor" action="save_donor_data.php" method="post">
                <div class="row">
                    <div class="col-lg-4 mb-4"><br>
                        <div class="font-italic">Full Name<span style="color: red;">*</span></div>
                        <div><input type="text" name="fullname" class="form-control" required></div>
                    </div>
                    <div class="col-lg-4 mb-4"><br>
                        <div class="font-italic">Mobile Number<span style="color: red;">*</span></div>
                        <div><input type="text" name="mobileno" class="form-control" required></div>
                    </div>
                    <div class="col-lg-4 mb-4"><br>
                        <div class="font-italic">Email<span style="color: red;">*</span></div>
                        <div><input type="email" name="emailid" class="form-control" required></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-4"><br>
                        <div class="font-italic">age<span style="color: red;">*</span></div>
                        <div><input type="number" name="age" class="form-control" required></div>
                    </div>
                    <div class="col-lg-4 mb-4"><br>
                        <div class="font-italic">Gender<span style="color: red;">*</span></div>
                        <div><select name="gender" class="form-control" required>
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="Other">Other</option>
                        </select></div>
                    </div>
                    <div class="col-lg-4 mb-4"><br>
                        <div class="font-italic">Blood Group<span style="color: red;">*</span></div>
                        <div><select name="blood" class="form-control" required>
                            <option value="" selected disabled>Select</option>
                            <?php 
                            include 'conn.php';
                            $sql ="select * from blood";
                            $result =mysqli_query($conn, $sql) or die("query unsuccessful");
                             while($row=mysqli_fetch_assoc($result)){
                                ?>
                            <option value="<?php echo $row['blood_id'] ?>"> <?php echo $row['blood_group']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    </div>
                </div>
                <br>
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
                    <div class="col-lg-4 mb-4"><br>
                        <div><input type="submit" name="submit" value="Submit" class="btn btn-primary" style="cursor: pointer;" onclick="popup()" ></div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <?php 
      }else { 
        echo'<div class="alert alert-danger"><b>Please Log In First To Access Admin Portal.</b><?div>';
        ?>
        <form method="post" name="" action="index.php" class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-4" style="float:left;">
                    <button class="btn btn-primary" name="submit" value="submit">Go to Log In Page</button>
                </div>
            </div>
         </form>
     <?php } ?>
     <script>
        function popup(){
            alert ("Data added successfully.");
        }
        </script>
</body>
</html>