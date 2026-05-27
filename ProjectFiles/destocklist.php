<?php
include("configure/config.php");
$id= $_GET['id'];
$query="DELETE FROM blood_stock WHERE id='$id'";
$data = mysqli_query($conn,$query);

?>