<?php
include("configure/config.php");
$id= $_GET['id'];
$query="DELETE FROM donor_register WHERE id='$id'";
$query="DELETE FROM blood_stock WHERE id='$id'";
$data = mysqli_query($conn,$query);
if($data)
{
    header('location:donorlist.php');
}
else
{
    header('location:donorlist.php');
}
?>