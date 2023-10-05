<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Add this in your HTML before the Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Add this in your HTML before the closing </body> tag -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


 
   <style>
    body{
      margin: 0;
      font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      font-size:18px ;
      color: #f8f9f9;
    }
    .sidebar{
      margin: 0;
      padding: 0;
      width: 210px;
      background-color: #2e2d2d;
      position: fixed;
      height: 100%;
      overflow: auto;
    }
    .sidebar a{
      display: block;
      color: white;
      padding: 16px;
      text-decoration: none;
    } 
    .sidebar a:hover:not(.active){
       background-color: #ff4d4d;

    }
    .sidebar ul li > a:active{
      background: linear-gradient(to right,#ff4d4d, #f76a6a);
    }
    div.content{
   margin: left;
   padding: 1px 16px;
   height: 1000px;
    }
    

    @media screen and (max-width:700px){
      body{
        font-size: 14px;
      }
      .sidebar{
        width: 100%;
        height: auto;
        position: relative;
      }
      .sidebar a{
        float: left;
      }
      div.content{
        margin-left: 0;
      }
    }
   @media screen and (max-width:400px){
    body{
      font-size: 14px;
    }
    .sidebar a{
      text-align: center;
      float: none;
    }
   }

   </style>
</head>
<body >

  <div class="sidebar"><br>
    <img src="adminimages/logo.png" width="90%" style="filter: contrast(1);" ></img>
        <ul class="nav navbar-nav">
            <li><a href="dashboard.php" ><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Dashboard</a></li>
            <li><a href="add_donor.php"  ><span class="glyphicon glyphicon-pencil"></span>&nbsp;Add donor</a></li>
            <li><a href="donor_list.php" ><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Donor List</a></li>
            <li><a href="query.php"><span class="glyphicon glyphicon-check"></span>&nbsp;Check Query</a></li>
            <li><a href="pages.php" ><span class="glyphicon glyphicon-edit"></span>&nbsp;Manage Pages</a></li>
            <li><a href="update_contact.php"><span class="glyphicon glyphicon-edit"></span>&nbsp;Update contact info</a></li><br>
          </ul>
           <br>&nbsp;
          <ul class="nav navbar-nav" style="margin-top: 150px;">
           <li class="dropup"><a class="dropdown-toggle" id="qw" data-toggle="dropdown"  href="#" style="font-weight:bold; color:white;">
                <span class="glyphicon glyphicon-user"></span>&nbsp; &nbsp;
                <?php
            include 'conn.php';
            $username= $_SESSION['username'];
            $q= "select * from admin_info  where admin_username= '$username'";
            $result= mysqli_query($conn, $q) or die("query unsuccessful.");
             $row= mysqli_fetch_assoc($result);
             echo  $row['admin_name'];
            ?>
                <span class="caret"></span> </a>
                  <ul class="dropdown-menu" style="background-color:#D6EAF8;">
                           <li><a href="change_password.php" style="color:red ; filter: contrast(3);">Change Password</a></li>
                             <li><a href="logout.php" style="color:red;">Log Out</a></li>
                  </ul>
        </li>
        </ul>
  </div>
</body>
</html>