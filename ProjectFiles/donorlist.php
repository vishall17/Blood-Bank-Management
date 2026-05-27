<html>
    <head>
        <title>Display</title>
        <link rel="stylesheet" type="text/css" href="donorlist.css"/>
        <div class="topnav">
 <a class="active " href="adminhome.php">Home</a>
 <a class="active " href="adminlogout.php">Log Out</a>
 
</div>
        <style>
            body {
  background-image: url('https://www.teahub.io/photos/full/283-2838767_home-background-image-for-blood-bank.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size:cover;
}
            table
                {
                    background-color:white;
                }
                .update
                {
                    background-color: green;
                    color: white;
                    border: 0;
                    outline: none;
                    border-radius: 5px;
                    height: 23px;
                    width: 80px;
                    font-weight: bold;
                    cursor: pointer;
                }
                .delete
                {
                    background-color: red;
                    color: white;
                    border: 0;
                    outline: none;
                    border-radius: 5px;
                    height: 23px;
                    width: 80px;
                    font-weight: bold;
                    cursor: pointer;
                }
            </style>
</head>
<body>
<?php

include("configure/config.php");
$query="SELECT * from donor_register";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
if($total!=0)
{
    ?> 
    
 <!-- error_reporting(0); -->
    <h1 align = "center" style="background-color:yellow;">LIST OF DONOR REGISTRATION</h1>
<table border="1" border="3" cellspacing="7" width="100%" >
    <tr>
    <th width="5%">id</th>
    <th width="20%">Email</th>
    <th width="15%">Name</th>
    <th width="10%">Mobile No</th>
    <th width="10%">City</th>
    <th width="10%">Blood Group</th>
    <th width="10%">Change</th>
</tr>
    <?php
     while($result = mysqli_fetch_assoc($data))
     {
        echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['email']."</td>
                <td>".$result['name']."</td>
                <td>".$result['mobile']."</td>
                <td>".$result['city']."</td>
                <th>".$result['bgroup']."</td>
                <td><a href='update_design.php?id=$result[id]'><input type='submit' value='Update' class='Update'></a>
                <a href='delete.php?id=$result[id]'><input type='submit' value='Delete'
                 class='delete' onclick = 'delete' onclick = 'return checkdelete()'></a></td>
    </tr>
    ";
     }
}
else
{
    echo "No record";
}
?>
</table>
</body>
</html>
