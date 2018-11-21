<!DOCTYPE html>
<html>
<head>
	<title>Chinese - Chung Wah</title>
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
	  <a class = "active" href="chungwa.html">Chinese</a>
	  <a href="tacobell.html">Mexican</a>
	  <a href="burgerking.html">Fast Food</a>
	</div>

	<div class="row">
	  <div class="column" style="text-align:center">
	  	<a href="chungwa.html">
	    <img src="chung.png" style="width:100%"></a>
	  </div>
	   <div class="column" style="text-align:center">
	  	<a href="beijing.html">
	    <img src="beijing.png" style="width:100%"></a>
	  </div>
	</div>
		
	<h1>Chung Wah</h1>
	<div style="text-align:center;color:white; font-family: Lato">
	<p style="font-size:22px;color:white;"><br><br>About <b><i style="font-size:22px;color:orange">Chung Wah</i></b><br><br><br><i style="font-weight:lighter;font-size:21px">It is the vastness that holds the key to unlocking the mysteries of the country's cuisine. Because of the great land area, China has a great range of climate <br> which influence the crops that grow here and hence the dishes of the region. It is usual for culinary purpose to Divide China into four regions.</i><br><br><br>
	<i style="color:orange; font-size: 28px" class="fa fa-map-marker"></i><br>Frazer Town, North Bengaluru</i><br><br></p>
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
	    <img src="chung2.jpg" width = "270px" height="160px"></a>
	  </div>
	   <div class="column2">
	    <img src="chung5.jpg" width = "270px" height="170px"></a>
	  </div>
	  	   <div class="column2">
	    <img src="chung3.jpg" width="270px" height="190px"></a>
	  </div>
	  	   <div class="column2">
	    <img src="chung4.jpg" width = "270px" height="170px"></a>
	  </div>
	  	   <div class="column2">
	    <img src="chung1.jpg" width = "270px" height="160px"></a>
	  </div>
	</div>

	<h2><center><br><br>&nbsp;~ MENU ~</center></h2>
	<center>
		<button class="accordion" id="1" style="text-align:center; font-size: 22px"><img src="veg.png" width="20px" align="left">Gobi/Paneer Manchurian</button>
		<div class="panel" style="text-align:center; background-color:black; color:white; font-size: 22px">
			<center><p>It is an exotic dish made of mixed vegetable steamed formed into dumplings<br> deep fried and cooked in a tangy sauce.<pre style="font-size:22px"> Rs. 215.00/-</pre></center>
		  	<button class ="add" style="text-align:center"id="add1" onclick="register(this)">+</button>
		</div>

		<button class="accordion" id="2" style="text-align:center; font-size: 22px"><img src="veg.png" width="20px" align="left">Bean Sprout with Tofu</button>
		<div class="panel" style="text-align:center; background-color:black; color:white; font-size: 22px">
			<center><p>Easy and healthy bean sprouts with tofu. Refreshing, delicious and a dish<br> that goes well with almost anything.<pre style="font-size:22px"> Rs. 215.00/-</pre></center>
		  	<button class ="add" style="text-align:center" id="add2" onclick="register(this)">+</button>
		</div>

		<button class="accordion" id="3" style="text-align:center; font-size: 22px"><img src="nonveg.jpg" width="20px" align="left">Cantonese Chowmein</button>
		<div class="panel" style="text-align:center; background-color:black; color:white; font-size: 22px">
			<center><p>Contains deep-fried crunchy golden egg noodles, peppers, pea pods, bok-choy,<br> chestnuts, shrimp, roast pork, chicken, and beef, and is served in a thick sauce.<pre style="font-size:22px"> Rs. 330.00/-</pre></center></p>
		  	<button class ="add" style="text-align:center" id="add3" onclick="register(this)">+</button>
		</div>

		<button class="accordion" id="4" style="text-align:center; font-size: 22px"><img src="nonveg.jpg" width="20px" align="left">Lamb in Black Pepper</button>
		<div class="panel" style="text-align:center; background-color:black; color:white; font-size: 22px">
			<center><p>Stir fried lamb with black pepper with fresh cloves of garlic, a combination of<br> red and green pepper, a few strips of carrots for colour and slices of fresh onion.<pre style="font-size:22px"> Rs. 275.00/-</pre></center></p>
		  	<button class ="add" style="text-align:center" id="add4" onclick="register(this)">+</button>
		</div>

		<button class="accordion" id="5" style="text-align:center; font-size: 22px"><img src="veg.png" width="20px" align="left"><img src="nonveg.jpg" width="20px" align="left">Chinese/American Chopseuy [Veg/Non-Veg]</button>
		<div class="panel" style="text-align:center; background-color:black; color:white; font-size: 22px">
			<center><p>A dish consisting of meat and eggs, cooked quickly with vegetables such as bean<br> sprouts, cabbage, and celery and bound in a starch-thickened sauce.<pre style="font-size:22px"> Rs. 190.00/- (Veg)<br> Rs. 220.00/- (Non-Veg)</pre></center>
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

    	window.location.href="chungwa.php";

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