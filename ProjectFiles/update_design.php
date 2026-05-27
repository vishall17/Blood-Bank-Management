<?php 
include("configure/config.php");
$id= $_GET['id'];
$query="SELECT * from donor_register where id = '$id'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  background-image: url('https://wallup.net/wp-content/uploads/2018/09/27/186914-abstract-red-colors.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size:cover;
}
</style>
<body bgcolor="white">   
<link rel="stylesheet" type="text/css" href="style.css">
<div class="topnav">
 <a class="active " href="adminhome.php">Home</a>
 <a class="active " href="AboutUs.php">About Us</a>
 <a class="active " href="logout.php">Log Out</a>
</div> 
<tr>    
<td><br></td>
</tr><tr>
<td><br></td>
</tr>
<tr>
<td><br></td>
</tr>
<form action="update.php" method="post" >
<form action="upstocklist.php" method="post" >
<form action="destocklist.php" method="post" >
<center>
<table>
<tr>
<td><br></td>
</tr>
<h1>Update Donor Details<h1>
<tr>
                    <td><font size="6">Email:</font></td>
                    <td><input type="email" value=<?php echo $result['email'];?> name="email" required></input></td>
                </tr>
                <tr>
                    <td><font size="6">Name:</font></td>
                    
                    <td><input type="text" name="name" value="<?php echo $result['name'];?>" required></input></td>
                </tr>
                <tr>
                    <td><font size="6">Mobile:</font></td>
                    <td><input type="text" value=<?php echo $result['mobile'];?> name="mobile" required pattern="[0-9]{10}"/></input></td>
                </tr>
                <tr>
                    <td><font size="6">City:</font></td>
                    <td><input type="text" value=<?php echo $result['city'];?> name="city" required></input></td>           
                                
                </tr>
                <tr>
                    <td><font size="6">Blood Group:</font></td>
                
                     <td><select name="bgroup"> 
                                <option value="O+"
                                <?php
                                if($result['bgroup']=='O+')
                                {
                                    echo "selected";
                                }?>
                                >O+</option>
                                <option value="A+"
                                <?php
                                if($result['bgroup']=='A+')
                                {
                                    echo "selected";
                                }?>
                                >A+</option>
                                <option value="B+"
                                <?php
                                if($result['bgroup']=='B+')
                                {
                                    echo "selected";
                                }?>
                                >B+</option>
                                <option value="AB+"
                                <?php
                                if($result['bgroup']=='AB+')
                                {
                                    echo "selected";
                                }?>
                                >AB+</option>
                                <option value="O-"
                                <?php
                                if($result['bgroup']=='O-')
                                {
                                    echo "selected";
                                }?>
                                >O-</option>
                                <option value="A-"
                                <?php
                                if($result['bgroup']=='A-')
                                {
                                    echo "selected";
                                }?>
                                >A-</option>
                                <option value="B-"
                                <?php
                                if($result['bgroup']=='B-')
                                {
                                    echo "selected";
                                }?>
                                >B-</option>
                                <option value="AB-"
                                <?php
                                if($result['bgroup']=='AB+')
                                {
                                    echo "selected";
                                }?>
                                >AB-</option> 
                        </select></td>
                </tr>
               <tr>
                    <td></td>
                    <td><input type="Submit" value="Change"  class="btn btn-primary"/></tr>
<tr>
<td><br></td>
</tr>
<tr>
<td><br></td>
</tr>
</table>
<input type="number" value="<?php echo $id; 
?>
" style="visibility:hidden" name="id" >
                            </form>
                            </body>
                            </html>
