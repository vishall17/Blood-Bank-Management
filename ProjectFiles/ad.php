<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
  }
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'bloodbank_web');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * FROM adminlogin where name = '$name' && password = '$pass'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    $_SESSION['username'] = $name;
    header('location:adminhome.php');
}else{
 header('location:ad.html');  
}
?>  