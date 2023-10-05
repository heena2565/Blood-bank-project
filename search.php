<?php
 include 'db_conn.php';
 $bg= $_GET['blood_group'];
 $city=$_GET['city_name'];
 $q= "select * from donor_details where donor_blood='{$bg}' AND city_name= '{$city}' order by rand() limit 5";
  $result= mysqli_query($conn, $q) or die ("query unsuccessful.");
 if(mysqli_num_rows($result)>0){
 while($row= mysqli_fetch_assoc($result)){
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
                <?php 
 }
}
else
{
  echo "No Donor found.";
}
 ?>

            </div>


  