<!DOCTYPE html>
<html>
<head>
	<title>Fast Food - Subway</title>
	<meta name="viewport" content="width=device-width, initial-scale=0.8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="sidebar.css">
	<link rel="stylesheet" type="text/css" href="topmenu.css">
	<link rel="stylesheet" type="text/css" href="restaurant.css">
	<link rel="icon" type="image/png" href="logo.png">

</head>

<body>
	<div class="sidebar">
  		<a href="home.html"><i class="fa fa-home"></i> Home</a>
		<a href="cart.html"><i class="fa fa-shopping-cart"></i> My Cart</a>
		<a href="checkout.html"><i class="fa fa-sign-out"></i> Checkout</a>
		<a href="help.html"><i class="fa fa-question-circle"></i> Help</a>
	</div>

	<div class="pill-nav">
	  <a href="#home">North Indian F</a>
	  <a href="dominos.html">Italian</a>
	  <a href="chungwa.html">Chinese</a>
	  <a href = "tacobell.html">Mexican</a>
	  <a class="active" href = "burgerking.html">Fast Food</a>
	</div>

	<div class="row">
	  <div class="column" style="text-align:center">
	  	<a href="burgerking.html">
	    <img src="burgerking.png" style="width:100%"></a>
	  </div>
	   <div class="column" style="text-align:center">
	  	<a href="faasos.html">
	    <img src="faasos.png" style="width:100%"></a>
	  </div>
	   <div class="column" style="text-align:center">
	  	<a href="subway.html">
	    <img src="subway.png" style="width:100%"></a>
	  </div>
	</div>
		<h1>Subway</h1>
	<div style="text-align:center;color:white;font-family:Lato">
	<p style="font-size:22px;color:white;"><br><br>About <b><i style="font-size:24px;color:orange">Subway</i></b><br><br><i style="font-weight:lighter;font-size:21px">Subway India, legendary fast food restaurants, now in Delhi, Mumbai, Chennai and Bangalore.<br> Home to a huge range of Subs, salads, treats and desserts.</i><br><br><br>

	<i style="color:orange; font-size: 28px" class="fa fa-map-marker"></i><br>Sampige Road, Malleshwaram<br><br></p>
	</div>

		<div class="rowrating">
		 <div class="black">
	       	<img src="black.png" >
	      </div>
	     
	  <div class="rating" style="text-align:center">
	    <img src="fullstar.png" width="30px">
	  </div>
	   <div class="rating" style="text-align:center">
	    <img src="fullstar.png" width="30px">
	  </div>
	   <div class="rating" style="text-align:center">
	    <img src="fullstar.png" width="30px">
	  </div>
	 <div class="rating" style="text-align:center">
	    <img src="fullstar.png" width="30px">
	  </div>
	  <div class="rating" style="text-align:center">
	    <img src="emptystar.png" width="30px">
	  </div>
	</div>

		</div>
		<div class="row2">
	  <div class="column2">
	    <img src="" style="width:100%"></a>
	  </div>
	   <div class="column2">
	    <img src="subway2.jpg" width = "270px"></a>
	  </div>
	   <div class="column2">
	    <img src="subway3.jpg" width = "270px"></a>
	  </div>
	  	   <div class="column2">
	    <img src="subway1.jpg" width="270px"></a>
	  </div>
	  	   <div class="column2">
	    <img src="subway4.jpg" width = "270px" ></a>
	  </div>
	  	   <div class="column2">
	    <img src="subway5.jpg" width = "270px"></a>
	  </div>
	</div>

	<h2><center><br><br>&nbsp;&nbsp;~ MENU ~</center></h2>
	<center>


		<button class="accordion" id="1" style="text-align:center;font-size:22px"><img src="veg.png" width="20px" align="left">Chatpata Chana Patty Sub 6" (15 cm)</button>
		<div class="panel" style="text-align:center;background-color:black; color:white;font-size:22px">
		  	<center><p>Delicious sub with a flavourful Chana base patty will remind you of Chatpata chaat flavour.<pre style="font-size:22px"> Rs. 158.00/-</pre></center>
		  	<button class ="add" style="text-align:center" id="add1" onclick="register(this)">+</button>
		</div>

		<br><button class="accordion" id="2" style="text-align:center;font-size:22px"><img src="nonveg.jpg" width="20px" align="left">
		Chicken Tikka Sub 6" (15 cm)</button>
		<div class="panel" style="text-align:center;background-color:black; color:white;font-size:22px">
			<center><p> Boneless chicken breast pieces marinated with tikka seasoning,<br> barbecued yet still delightfully succulent.<pre style="font-size:22px"> Rs. 196.00/-</pre></center>
			<button class ="add" style="text-align:center" id="add2" onclick="register(this)">+</button>
		</div>


		<br><button class="accordion" id="3" style="text-align:center;font-size:22px"><img src="nonveg.jpg" width="20px" align="left">  Italian B.M.T. Sub 6" (15 cm)</button>
		<div class="panel" style="text-align:center;background-color:black; color:white;font-size:22px">
			<center><p> The Italian B.M.T. is bursting with sliced salami, pepperoni, slice and<br> your choice of vegetables and condiments.<pre style="font-size:22px"> Rs. 210.00/-</pre></center>
			<button class ="add" style="text-align:center" id="add3" onclick="register(this)">+</button>
		</div>
			
		<br><button class="accordion" id="4" style="text-align:center;font-size:22px"><img src="veg.png" width="20px" align="left">Veg Seekh Sub 6" (15 cm)</button>
		<div class="panel" style="text-align:center; background-color:black; color:white;font-size:22px">
			<center><p>A sub made from veg seekh kabab, enriched with the distinctive<br> flavours of aromatic Indian spice mix.<pre style="font-size:22px"> Rs. 158.00/-</pre></center>
		  	<button class ="add" style="text-align:center" id="add4" onclick="register(this)">+</button>
		</div>

		<br><button class="accordion" id="5" style="text-align:center;font-size:22px"><img src="nonveg.jpg" width="20px" align="left">Tuna Sub 6" (15 cm)</button>
		<div class="panel" style="text-align:center; background-color:black; color:white;font-size:22px">
			<center><p> This gift from the sea is simple, yet sumptuous ensemble of flaked tuna,<br> mixed with mayo, and your choice of fresh vegetables.<pre style="font-size:22px"> Rs. 210.00/-</pre></center>
			<button class ="add" style="text-align:center" id="add5" onclick="register(this)">+</button>
		</div>

	</center>

		<script>
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
		    acc[i].addEventListener("click", function() {
		        this.classList.toggle("active");
		        var panel = this.nextElementSibling;
		        if (panel.style.display === "block") {
		            panel.style.display = "none";
		        } else {
		            panel.style.display = "block";
		        }
		    });
		}

	function register(el) {
    	var x = el.id;
    	var y = document.getElementById(x[x.length-1]).textContent;
    	alert(y);
    	var z = el.previousElementSibling.querySelector('pre').textContent;
    	alert(z);

    	var cur = "Item =" + y;
    	document.cookie = cur;

    	var cur2 = "Price =" + z;
    	document.cookie = cur2;

    	window.location.href="subway.php";

    }

		var el = document.querySelector('h1');
		el.style.top = "175px";
		el.style.left = "245px";
	</script>

	<?php
	$var = $_COOKIE;
	 //echo $var['Item'];
	 //echo $var['Price'];
	define('DB_NAME', 'example');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');

	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

	if(!$link){
		die('Could not connect: '.mysql_error());
	}

	$db_selected = mysqli_select_db($link,DB_NAME);

	if(!$db_selected){
		die('Cannot use: '.DB_NAME. ': '.mysqli_error($link));
	}

	$value1 = $var['Item'];
	$value2 = $var['Price'];


	$sql = "INSERT INTO hello1 (Item,Price) VALUES ('" . $value1. "','" . $value2. "')";

	if(!mysqli_query($link,$sql)){
		die('Error: '.mysqli_error($link));
}
?>

</body>
</html>