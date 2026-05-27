<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:ad.html');
}
?>
<!Doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*{
  box-sizing: border-box;
  }
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}
.row::after {
  content: "";
  clear: both;
  display: table;
}
body {
  background-image: url('img3.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<centre>
<body bgcolour="white;" style="font-family:Verdana;">
<form  name="Home"  method="post" >
<table>
<title>Blood Bank System</title>
<link rel="stylesheet" type="text/css" href="adminhome.css"/>

<div class="topnav">
 <a class="active " href="Home.php">Home</a>
 <a class="active " href="donorlist.php">Donor List</a>
 <a class="active " href="bloodstock.php">Blood Stocklist</a>
<a class="active " href="adminlogout.php">Log Out</a>
 </div>
<body>
<h1 style="color:black;"> Hello ADMIN, You can do neccesary changes here ! </h1>

  <tr>
    <td> 
    <tr><br></tr>
    <tr>
    <tr>
    <td>
    <tr><br></tr>
    <tr>

</td>
</tr> -->

</body>
</table>
</form>
</centre>
</head>
</html>
