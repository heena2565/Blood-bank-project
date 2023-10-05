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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

    #sidebar{position:relative;}
    #content{position:relative;margin-left:250px;width:80%;}
    @media screen and (max-width: 600px) {
      #content {
        position:relative;margin-left:auto;margin-right:auto;
      }
    }
    </style>
    </head>
    <?php 
    include 'conn.php';
    include 'session.php';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    ?>
    <body style="color:black;">
        <div id="sidebar">
   <?php 
   $active= "";
   include 'sidebar.php';
   ?>  
   </div>

   <div id="content">
    <div class="content-wrapper">
        <div class="content-fluid">
              <div class="row">
                <div class="col-md-12 lg-12 sm-12">
                    <h1 class="page-title">Change Password</h1>

                </div>
              </div>
              <div class="row">
                <div class="col-md-10">
                    <div class="panel panel-default">
                        <div class=" panel-heading">Password Fields</div>
                        <div class="panel-body">
                            <form method="post" name="changepwd" class="form-horizontal">
                                <div class="form-group" method="post">
                                    <label  class="col-md-4 control-label">Current Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="currentpassword" id="password" required>
                                    </div>
                                    
                                </div>
<div  class="hr-dashed"></div>
<div class="form-group" method="post">
    <label  class="col-md-4 control-label">New Password</label>
    <div class="col-sm-8">
        <input type="password" class="form-control" name="newpassword" id="newpassword" required>
    </div>
    
</div>
<div class="hr-dashed"></div>
<div class="form-group" method="post">
    <label  class="col-md-4 control-label">Confirm Password</label>
    <div class="col-sm-8">
        <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" required>
    </div>
    
</div>
        <div class="hr-dashed"></div>
             <div class="form-group">
               <div class=" col-sm-8 col-sm-offset-4">
                   <button class="btn btn-primary" name="submit" type="submit">Save Changes</button>

             </div>
                </div>
                  </form>
                        </div>
                    </div>
                </div>
              </div>
            <?php 
            if(isset($_POST['submit'])){
                $username=$_SESSION['username']; //contain user name of logged in person
                $password=mysqli_real_escape_string($conn,$_POST['currentpassword']);
               $sql = "select * from admin_info where admin_username='$username'";
                $result = mysqli_query($conn, $sql) or die("Query Failed.");
                if(mysqli_num_rows($result)>0){
                    while($rows=mysqli_fetch_assoc($result)){
                        if($password=$rows['admin_password']){
                            $newpassword=mysqli_real_escape_string($conn, $_POST['newpassword']);
                            $confirmpassword=mysqli_real_escape_string($conn, $_POST['confirmpassword']);
                          if($newpassword == $confirmpassword){
                            if($newpassword != $password){
                                $q= "UPDATE  admin_info set admin_password = '{$newpassword}' where admin_username= '{$username}'";
                                $result1=mysqli_query($conn, $q) or die("Query Failed");
                                echo '<div class= "alert alert-success alert-dissmissible">
                                <button type="button" class="close" data-dismiss="alert"><&times;</button><b>Password Changes Successfully.</b></div>';

                            }
                            else{
                                echo '<div class="alert alert-warning alert-dissmissible"><button type="button" class="close" data-dismiss="alert"><&times;</button><b>New Password cannot be same as the old one.</b></div>';
                            }

                        }  
                        else{
                            echo '<div class= "alert alert-success alert-dissmissible">
                            <button type="button" class="close" data-dismiss="alert"><&times;</button><b>Password doesn\'t match</b></div>';                            
                        }
                        }
                    }
                }
            }
              ?>
              <?php }else{
                 echo '<div classs="alert alert-danger"><b>Please Login First To Access Admin Portal.</b></div>';
              ?>
              <form  method="post" name="" action="index.php" class="form-horizontal">
               <div class="form-group">
                <div class="col-sm-8 col-sm-offset4" style="float:left">
              
                <button  class="btn btn-primary" name="submit" type="submit">Go To Login Page</button>

            </div>
              </div>

            </form>
            <?php } ?>
        </div>
    </div>
   </div>
    </body>
</html>