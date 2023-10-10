<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container"><br>
        <h2>Welcome Admin</h2>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="imgcontainer">
                <img src="adminimages/img_avatar2.png" alt="avatar" class="avatar">
            </div>
            <div class="container-wrap">
                <input type="text" placeholder="Username" name="username" required> <br>
                <input type="password" placeholder="Password" name="password" required> <br>
                <button  name="login" type="submit">Log In</button>
               
            </div>
        </form>
    </div>    
    </div>
    <?php 
     include 'conn.php';
    if(isset($_POST['login'])){
    $username= mysqli_real_escape_string($conn, $_POST['username']);
    $password=mysqli_real_escape_string($conn, $_POST['password']);
    $q= "select * from admin_info where admin_username='$username' and admin_password='$password'";
    $result= mysqli_query($conn,$q) or die("query failed.");
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_Assoc($result)){
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username;
            header("Location: dashboard.php");
        }
    }
    else{
        echo '<div class="alert alert-danger" style="font-weight:bold;">Username and Password  not matched!</div> ';
    }



    }
    ?>
    

</body>
</html>