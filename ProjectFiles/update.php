<?php 
include("configure/config.php");
if(!$conn)
{
  echo "not connected";
 }
if($conn)
{
  
    $id = $_POST['id'];
   $email = $_POST['email'];
   $name = $_POST['name'];
   $mobile = $_POST['mobile'];
   $city = $_POST['city'];
   $bloodgroup = $_POST['bgroup'];
   $sql = "UPDATE  donor_register SET email= '$email', name='$name', mobile ='$mobile', city='$city', bgroup='$bloodgroup' WHERE id='$id'";
  $sql = "UPDATE  blood_stock SET bgroup='$bloodgroup' WHERE id='$id'";
   $result = mysqli_query($conn, $sql);
   if($result)
   {
    header('location:change.html');
   }
   else
   {
    header('location:reg.html');
   } 
}
else
{
  "not connected";
}
 
  ?>