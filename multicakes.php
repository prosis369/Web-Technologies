<!DOCTYPE html>
<html>
<head>
	<title>Donuts & Cakes - Multi Cakes</title>
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
	  <a href="creamstone.html">Ice Creams & Milkshakes</a>
	  <a class = "active" href="krispykreme.html">Donuts & Cakes</a>
	  <a href="belgian.html">Waffles & Pancakes</a>
	</div>

	<div class="row">
			  <div class="column" style="text-align:center">
	  	<a href="krispykreme.html">
	    <img src="krispykreme.png" style="width:90%"></a>
	  </div>
	  	  <div class="column" style="text-align:center">
	  	<a href="multicakes.html">
	    <img src="multicakes.png" style="width:80%"></a>
	  </div>
	  <div class="column" style="text-align:center">
	  	<a href="justbake.html">
	    <img src="justbake.png" style="width:80%"></a>
	  </div>


	</div>
		<h1>Multicakes</h1>
	<div style="text-align:center;color:white;font-family:Lato">
	<p style="font-size:22px;color:white;"><br><br>About <b><i style="font-size:24px;color:orange">Multicakes</i></b><br><br><i style="font-weight:lighter;font-size:21px"> Multi Cakes is one place for all kind of cakes with fabulous flavours and shapes.</i><br><br><br>

	<i style="color:orange; font-size: 28px" class="fa fa-map-marker"></i><br>7th phase, JP Nagar, Bangalore<br><br></p>
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
	    <img src="emptystar.png" width="30px">
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
	    <img src="multicakes4.jpeg" width = "270px" height="160px"></a>
	  </div>
	   <div class="column2">
	    <img src="multicakes2.jpeg" width = "270px" height="170px"></a>
	  </div>
	  	   <div class="column2">
	    <img src="multicakes5.jpeg" width="270px" height="190px"></a>
	  </div>
	  	   <div class="column2">
	    <img src="multicakes1.jpeg" width = "270px" height="170px"></a>
	  </div>
	  	   <div class="column2">
	    <img src="multicakes3.jpeg" width = "270px" height="160px"></a>
	  </div>
	</div>

	<h2><center><br><br>&nbsp;&nbsp; ~ MENU ~</center></h2>
	<center>


		<button class="accordion" id="1" style="text-align:center;font-size:22px"><img src="nonveg.jpg" width="20px" align="left">Chocolate Truffle Cake </button>
		<div class="panel" style="text-align:center;background-color:black; color:white;font-size:22px">
		  	<center><p>Chocolate sponge, chocolate truffle cream - 1kg<pre style="font-size:22px"> Rs. 700.00/-</pre></center>
		  	<button class ="add" style="text-align:center" id="add1" onclick="register(this)">+</button>
		</div>

		<br><button class="accordion" id="2" style="text-align:center;font-size:22px"><img src="veg.png" width="20px" align="left">Litchi Almond Cake</button>
		<div class="panel" style="text-align:center;background-color:black; color:white;font-size:22px">
			<center><p> Vanilla sponge, almond, litchis - 1/2 kg<pre style="font-size:22px"> Rs. 425.00/-</pre></center>
			<button class ="add" style="text-align:center" id="add2" onclick="register(this)">+</button>
		</div>


		<br><button class="accordion" id="3" style="text-align:center;font-size:22px"><img src="veg.png" width="20px" align="left">  Fruit And Forest Cake</button>
		<div class="panel" style="text-align:center;background-color:black; color:white;font-size:22px">
			<center> <p>Chocolate sponge, milk chocolate, belgium fruits - 1kg<pre style="font-size:22px"> Rs. 850.00/-</pre></center>
			<button class ="add" style="text-align:center" id="add3" onclick="register(this)">+</button>
		</div>
			
		<br><button class="accordion" id="4" style="text-align:center;font-size:22px"><img src="nonveg.jpg" width="20px" align="left">American Walnut Brownie</button>
		<div class="panel" style="text-align:center; background-color:black; color:white;font-size:22px">
			<center><p>A square, baked, chocolate dessert sprinkled with walnuts and baked American style.<pre style="font-size:22px"> Rs. 60.00/-</pre></center>
		  	<button class ="add" style="text-align:center" id="add4" onclick="register(this)">+</button>
		</div>

		<br><button class="accordion" id="5" style="text-align:center;font-size:22px"><img src="nonveg.jpg" width="20px" align="left">Tiramisu Mousses Cake</button>
		<div class="panel" style="text-align:center; background-color:black; color:white;font-size:22px">
			<center><p>  Tiramisu is a coffee-flavoured Italian dessert. It is made of low density sweet sponge biscuits <br>dipped in coffee, layered with a whipped mixture of eggs,<br> sugar, and mascarpone cheese, flavoured with cocoa.<pre style="font-size:22px"> Rs. 700.00/-</pre></center>
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

    	window.location.href="multicakes.php";
		
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