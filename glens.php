<!DOCTYPE html>
<html>
<head>
	<title>Waffles & Pancakes - Glen's Bakehouse</title>
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
		<a href="mycart.html"><i class="fa fa-shopping-cart"></i> My Cart</a>
		<a href="checkout.html"><i class="fa fa-sign-out"></i> Checkout</a>
		<a href="help.html"><i class="fa fa-question-circle"></i> Help</a>
	</div>

	<div class="pill-nav">
	  <a href="#home">North Indian F</a>
	  <a href="creamstone.html">Ice Creams & Milkshakes</a>
	  <a href="krispykreme.html">Donuts & Cakes</a>
	  <a class = "active" href="belgian.html">Waffles & Pancakes</a>
	</div>

	<div class="row">
	  <div class="column" style="text-align:center">
	  	<a href="belgian.html">
	    <img src="belgian.png" style="width:100%"></a>
	  </div>
	   <div class="column" style="text-align:center">
	  	<a href="wafflenation.html">
	    <img src="wafflenation.png" style="width:100%"></a>
	  </div>
	  <div class="column" style="text-align:center">
	  	<a href="glens.html">
	    <img src="glens.png" style="width:100%"></a>
	  </div>
	</div>
		<h1>Glen's Bakehouse</h1>
	<div style="text-align:center;color:white;font-family:Lato">
	<p style="font-size:22px;color:white;"><br><br>About <b><i style="font-size:24px;color:orange">Glen's Bakehouse</i></b><br><br><i style="font-weight:lighter;font-size:21px">  Inspired by the old world romance of baking and homemade dishes, <br>a lovely menu peppered with words and emotion,resonates with the in-house specials <br>that include traditional roasts, potpies, cakes and caffeinated beverages.</i><br><br><br>

	<i style="color:orange; font-size:28px" class="fa fa-map-marker"></i><br> Lavelle Rd, Bangalore<br><br></p>
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
	    <img src="halfstar.png" width="30px">
	  </div>
	</div>

		</div>

		</div>
		<div class="row2">
	  <div class="column2">
	    <img src="" style="width:100%"></a>
	  </div>
	   <div class="column2">
	    <img src="glens3.jpg" width = "270px"></a>
	  </div>
	   <div class="column2">
	    <img src="glens2.jpg" width = "270px"></a>
	  </div>
	  	   <div class="column2">
	    <img src="glens4.jpg" width="270px" height="210px"></a>
	  </div>
	  	   <div class="column2">
	    <img src="glens1.jpg" width = "270px"></a>
	  </div>
	  	   <div class="column2">
	    <img src="glens5.jpg" width = "270px" height="160px"></a>
	  </div>
	</div>

	<h2><center><br><br>&nbsp; ~ MENU ~</center></h2>
	<center>

		<button class="accordion" id="1" style="text-align:center;font-size:22px"><img src="veg.png" width="20px" align="left">Latte</button>
		<div class="panel" style="text-align:center; background-color:black; color:white;font-size:22px">
			<center><p>An Espresso topped with steamed, frothed milk<pre style="font-size:22px"> Rs. 85.00/-</pre></center>
		  	<button class ="add" style="text-align:center" id="add1" onclick="register(this)">+</button>
		</div>

		<br><button class="accordion" id="2" style="text-align:center;font-size:22px"><img src="veg.png" width="20px" align="left">Smoothies</button>
		<div class="panel" style="text-align:center; background-color:black; color:white;font-size:22px">
			<center><p>Fruity and Refreshing smoothies of all flavours!<pre style="font-size:22px"> Rs. 130.00/-</pre></center>
			<button class ="add" style="text-align:center" id="add2" onclick="register(this)">+</button>
		</div>

		<br><button class="accordion" id="3" style="text-align:center;font-size:22px"><img src="veg.png" width="20px" align="left">Yoghurt</button>
		<div class="panel" style="text-align:center;background-color:black; color:white;font-size:22px">
		  	<center><p>Mango and Vanilla<pre style="font-size:22px"> Rs. 145.00/-</pre></center>
		  	<button class ="add" style="text-align:center" id="add3" onclick="register(this)">+</button>
		</div>

		<br><button class="accordion" id="4" style="text-align:center;font-size:22px"><img src="veg.png" width="20px" align="left">Red Velvet Sunday</button>
		<div class="panel" style="text-align:center;background-color:black; color:white;font-size:22px">
			<center><p>Traditionally prepared red velvet with butter and beaten cream cheese<br> with ice cream and chocolate shavings<pre style="font-size:22px"> Rs. 150.00/-</pre></center>
			<button class ="add" style="text-align:center" id="add4" onclick="register(this)">+</button>
		</div>

		<br><button class="accordion" id="5" style="text-align:center;font-size:22px"><img src="veg.png" width="20px" align="left">The Great Baked Cheese Cake</button>
		<div class="panel" style="text-align:center;background-color:black; color:white;font-size:22px">
			<center><p>A dessert you love -in a sundae<pre style="font-size:22px"> Rs. 175.00/-</pre></center>
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
      	var z = el.previousElementSibling.querySelector('pre').textContent;
    	
    	var cur = "Item =" + y;
    	document.cookie = cur;

    	var cur2 = "Price =" + z;
    	document.cookie = cur2;
    	
    	window.location.href="glens.php";

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