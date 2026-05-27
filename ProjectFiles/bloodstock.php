<!Doctype html>
<html lang="en" class="no-js">
    <head>
        <title>Display</title>
        <link rel="stylesheet" type="text/css" href="bloodstock.css"/>
        <div class="topnav">
 <a class="active " href="adminhome.php">Home</a>

 <a class="active " href="adminlogout.php">Log Out</a>
 
</div>
        <style>
            body {
  background-image: url('img6.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: height: 150px;
  background-size: width: 150px;
  background-position: center;
  
  
}
            table
                {
                    background-color:white;
                }
                
table, th, td {
  border: 1px solid black;
  border-radius: 5px;
}
th, td {
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  padding-right: 10px;

}

    </style>
</head>
<body>

    <h1 align = "center">BLOOD STOCK LIST</h1>
  
    <table align ="center" style="width:20%">
  <tr>
   <th>Blood Group</th>
    <th>Quantity</th>
  </tr>
  <tr>
   <th>O+</th>
   <?php
    include("configure/config.php");

    $ins= "SELECT * FROM blood_stock WHERE bgroup='O+'";
    $quey = mysqli_query($conn, $ins)or die (mysqli_error($conn));;
    if($category_total=mysqli_num_rows( $quey))
    {
       echo '<th>'.$category_total.'</th>';
    }
    else
    {
        echo '<th>No Data</th>';
    }
    ?>


  </tr>
  <tr>
    <th>O-</th>

    <?php
    include("configure/config.php");

    $ins= "SELECT * FROM blood_stock WHERE bgroup='O-'";
    $quey = mysqli_query($conn, $ins)or die (mysqli_error($conn));;
    if($category_total=mysqli_num_rows( $quey))
    {
       echo '<th>'.$category_total.'</th>';
    }
    else
    {
        echo '<th>No Data</th>';
    }
    ?>
  </tr>
  <tr>
    <th>A+</th>
    <?php
    include("configure/config.php");

    $ins= "SELECT * FROM blood_stock WHERE bgroup='A+'";
    $quey = mysqli_query($conn, $ins)or die (mysqli_error($conn));;
    if($category_total=mysqli_num_rows( $quey))
    {
       echo '<th>'.$category_total.'</th>';
    }
    else
    {
        echo '<th>No Data</th>';
    }
    ?>
  </tr>
  <tr>
    <th>A-</th>
    <?php
    include("configure/config.php");

    $ins= "SELECT * FROM blood_stock WHERE bgroup='A-'";
    $quey = mysqli_query($conn, $ins)or die (mysqli_error($conn));;
    if($category_total=mysqli_num_rows( $quey))
    {
       echo '<th>'.$category_total.'</th>';
    }
    else
    {
        echo '<th>No Data</th>';
    }
    ?>
  </tr>
  <tr>
    <th>B+</th>
    <?php
    include("configure/config.php");

    $ins= "SELECT * FROM blood_stock WHERE bgroup='B+'";
    $quey = mysqli_query($conn, $ins)or die (mysqli_error($conn));;
    if($category_total=mysqli_num_rows( $quey))
    {
       echo '<th>'.$category_total.'</th>';
    }
    else
    {
        echo '<th>No Data</th>';
    }
    ?>
  </tr>
  <tr>
    <th>B-</th>
    <?php
    include("configure/config.php");

    $ins= "SELECT * FROM blood_stock WHERE bgroup='B-'";
    $quey = mysqli_query($conn, $ins)or die (mysqli_error($conn));;
    if($category_total=mysqli_num_rows( $quey))
    {
       echo '<th>'.$category_total.'</th>';
    }
    else
    {
        echo '<th>No Data</th>';
    }
    ?>
  </tr>
  <tr>
    <th>AB+</th>
    <?php
    include("configure/config.php");

    $ins= "SELECT * FROM blood_stock WHERE bgroup='AB+'";
    $quey = mysqli_query($conn, $ins)or die (mysqli_error($conn));;
    if($category_total=mysqli_num_rows( $quey))
    {
       echo '<th>'.$category_total.'</th>';
    }
    else
    {
        echo '<th>No Data</th>';
    }
    ?>
  </tr>
  <tr>
    <th>AB-</th>
    <?php
    include("configure/config.php");

    $ins= "SELECT * FROM blood_stock WHERE bgroup='AB-'";
    $quey = mysqli_query($conn, $ins)or die (mysqli_error($conn));;
    if($category_total=mysqli_num_rows( $quey))
    {
       echo '<th>'.$category_total.'</th>';
    }
    else
    {
        echo '<th>No Data</th>';
    }
    ?>
  </tr>
  
</table>

    

</body>
</html>
