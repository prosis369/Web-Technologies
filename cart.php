<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=0.8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="sidebar.css">
	<link rel="stylesheet" type="text/css" href="topmenu.css">
  <link rel="stylesheet" type="text/css" href="restaurant.css">
  <style>
    @font-face
    {
      font-family: font;
      src: url('Le Havre Rough Outline.otf'); 
    }
        table, th, td{
      border: 1px solid
      black;
      width: 40%;
      height: 100%;
    }
  </style>
  <style>
    table{
      padding: 16px;
      font-size: 28px;
      color: white;

    }
  </style>
  <style>
    table .data-heading{
      font-weight: italics;
      font-size:40px;
      color:orange;

     
    }
  </style>
</head>
<body style="background-color: black">

<div class="sidebar">
  <a href="home.html"><i class="fa fa-home"></i> Home</a>
  <a href="cart.php"><i class="fa fa-shopping-cart"></i> My Cart</a>
  <a href="checkout.html"><i class="fa fa-sign-out"></i> Checkout</a>
  <a href="help.html"><i class="fa fa-question-circle"></i> Help</a>
</div>

 <h2 style="color: orange; font-size: 70px;font-family: font"><center>Cart</center></h2>

 <p align="center" style="font-size: 30px; color: orange; font-family: Calibri">
   <!-- Items &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; Quantity &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; Price  -->
 	<center>
    <?php
define("host", "localhost");
define("user", "root");
define("pass", "");
define("db_name", "example");


//create connection
$connection = mysqli_connect(host, user, pass, db_name);

//test if connection failed
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

//get results from database
$result = mysqli_query($connection,"SELECT * FROM hello1");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag
$sum = 0;
//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }

    $temp =  preg_replace("[Rs\. ]", "", $row[$all_property[2]]);
    $s = preg_replace("[/-]", "", $temp);

    $sum+= floatval($s);
    // $all_property[1]
    // print_r($all_property);
    echo '</tr>';
}

echo "</table>";
?>
 </p>
<br><br><br>
<!-- <p style="color: white;font-family: Lato; font-size: 30px;"><?php
// if($sum==0)
// echo "Your cart is empty!"
?></p> -->
 <p style="color: white; font-family: Lato; font-size: 30px; color: orange">Your total bill is&nbsp; <i style="color:white">Rs. <?php  echo $sum; ?></i></p>
</center>


</body>
</html>
