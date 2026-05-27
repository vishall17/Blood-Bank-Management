<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'bloodbank_web');
$city = $_POST['city'];
$bgroup = $_POST['bgroup'];
$s = "select * from donor_register where city = '$city' && bgroup = '$bgroup'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num != 0){
    header('location:yes.html');
}else{
 header('location:no.html');  
}
?>   