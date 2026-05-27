<?php
session_start();
header('location:login.html');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'bloodbank_web');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from login where name='$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num==1){
    echo "username already exit";
}else{
    $reg =" insert into login(name , password) values ('$name' , '$pass')";
    mysqli_query($con , $reg);
    echo"registration successfull";
} 