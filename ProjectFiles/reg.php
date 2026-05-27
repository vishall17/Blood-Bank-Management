<?php 
include("configure/config.php");
if(!$conn)
{
  echo "not connected";
 }
if($conn)
{

   $email = $_POST['email'];
   $name = $_POST['name'];
   $mobile = $_POST['mobile'];
   $city = $_POST['city'];
   $bloodgroup = $_POST['bgroup'];
   $insert = "INSERT INTO `donor_register`(`email`, `name`, `mobile`, `city`, `bgroup`) VALUES ('$email','$name','$mobile','$city','$bloodgroup')";
   $query = mysqli_query($conn , $insert) or die (mysqli_error($conn));
   if($query==1)
   {
    $ins="INSERT INTO `blood_stock`(`bgroup`) VALUES ('$bloodgroup')";
    $quey = mysqli_query($conn , $ins) or die (mysqli_error($conn));
    if($quey==1)
  {
    header('location:thankyou.html');
  }
}
   else
   {
    header('location:reg.html');
   } 
  }
 ?>
   