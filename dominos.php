<!DOCTYPE html>
<html>
<head>
	<title>Italian - Domino's Pizza</title>
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
	  <a class = "active" href="dominos.html">Italian</a>
	  <a href="chungwa.html">Chinese</a>
	  <a href="tacobell.html">Mexican</a>
	  <a href="burgerking.html">Fast Food</a>
	</div>

	<div class="row">
	  <div class="column" style="text-align:center">
	  	<a href="dominos.html">
	    <img src="dom.png" style="width:100%"></a>
	  </div>
	   <div class="column" style="text-align:center">
	  	<a href="intalia.html">
	    <img src="intalia.png" style="width:100%"></a>
	  </div>
	</div>
		<h1>Domino's Pizza</h1>
	<div style="text-align:center;color:white;font-family:Lato">
	<p style="font-size:22px;color:white;"><br><br>About <b><i style="font-size:24px;color:orange">Domino's</i></b><br><br><i style="font-weight:lighter;font-size:21px"> Features a variety of Italian-American main and side dishes. <br>Pizza is the primary focus, with traditional, specialty, and custom pizzas<br> available in a variety of crust styles and toppings.</i><br><br><br>

	<i style="color:orange; font-size:28px" class="fa fa-map-marker"></i><br> Banashankari, Bengaluru<br><br></p>
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

		</div>
		<div class="row2">
	  <div class="column2">
	    <img src="" style="width:100%"></a>
	  </div>
	   <div class="column2">
	    <img src="dom1.jpg" width = "270px"></a>
	  </div>
	   <div class="column2">
	    <img src="dom2.jpg" width = "270px"></a>
	  </div>
	  	   <div class="column2">
	    <img src="dom4.jpg" width="270px" height="190px"></a>
	  </div>
	  	   <div class="column2">
	    <img src="dom3.jpg" width = "270px" height="170px"></a>
	  </div>
	  	   <div class="column2">
	    <img src="dom5.jpg" width = "270px" ></a>
	  </div>
	</div>

	<h2><center><br><br>&nbsp; ~ MENU ~</center></h2>
	<center>

		<button class="accordion" id="1" style="text-align:center;font-size:22px"><img src="veg.png" width="20px" align="left">Margherita</button>
		<div class="panel" style="text-align:center; background-color:black; color:white;font-size:22px">
		<center><p>A classic delight with 100% real mozzarella cheese<pre style="font-size:22px"> Rs. 99.00/-</pre></center>
		  	<button class ="add" style="text-align:center" id="add1" onclick="register(this)">+</button>
		</div>

		<br><button class="accordion" id="2" style="text-align:center;font-size:22px"><img src="veg.png" width="20px" align="left">Farmhouse</button>
		<div class="panel" style="text-align:center; background-color:black; color:white;font-size:22px">
			<center><p>Delightful combination of onion, capsicum, tomato and grilled mushroom<pre style="font-size:22px"> Rs. 205.00/-</pre></center>
			<button class ="add" style="text-align:center" id="add2" onclick="register(this)">+</button>
		</div>

		<br><button class="accordion" id="3" style="text-align:center;font-size:22px"><img src="nonveg.jpg" width="20px" align="left">Pepper Barbeque Chicken</button>
		<div class="panel" style="text-align:center;background-color:black; color:white;font-size:22px">
		  	<center><p>Pepper barbeque chicken for that extra zing<pre style="font-size:22px"> Rs. 185.00/-</pre></center>
		  	<button class ="add" style="text-align:center" id="add3" onclick="register(this)">+</button>
		</div>

		<br><button class="accordion" id="4" style="text-align:center;font-size:22px"><img src="veg.png" width="20px" align="left">Cheese and Corn</button>
		<div class="panel" style="text-align:center;background-color:black; color:white;font-size:22px">
			<center><p>Sweet and juicy corn and 100% mozzarella cheesein a delectable combination<pre style="font-size:22px"> Rs. 165.00/-</pre></center>
			<button class ="add" style="text-align:center" id="add4" onclick="register(this)">+</button>
		</div>

		<br><button class="accordion" id="5" style="text-align:center;font-size:22px"><img src="nonveg.jpg" width="20px" align="left">Chicken Sausage</button>
		<div class="panel" style="text-align:center;background-color:black; color:white;font-size:22px">
			<center><p>American classic!SPicy, herbed chicken sausage on pizza<pre style="font-size:22px"> Rs. 165.00/-</pre></center>
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

    	window.location.href="dominos.php";

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