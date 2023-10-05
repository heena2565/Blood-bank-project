<?php
$name = $_POST['fullname'];
$number=$_POST['mobileno'];
$email=$_POST['emailid'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood'];
$address=$_POST['address'];
include 'conn.php';
$q= "INSERT INTO donor_details(donor_name, donor_number,donor_mail, donor_age, donor_gender, donor_blood, donor_address) values('{$name}','{$number}','{$email}','{$age}', '{$gender}','{$blood_group}', '{$address}')";
$result=mysqli_query($conn, $q);
header("location: http://localhost/oneBlood/admin/donor_list.php");
mysqli_Close($conn);
?>