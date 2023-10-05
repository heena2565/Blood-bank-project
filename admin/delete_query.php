<?php
include 'conn.php';

$que_id= $_GET['id'];
$q="DELETE FROM contact_query where query_id={$que_id}";
$result=mysqli_query($conn, $q);

mysqli_close($conn);
?>
