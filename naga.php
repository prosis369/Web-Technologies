<!DOCTYPE html>
<html>
<head>
	<title>South Indian - Nagarjuna</title>
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
	  <a href="mast.html">North Indian</a>
	  <a class = "active" href="mtr.html">South Indian</a>
	</div>

	<div class="row">
	  <div class="column" style="text-align:center">
	  	<a href="mtr.html">
	    <img src="mtr.png" style="width:100%"></a>
	  </div>
	   <div class="column" style="text-align:center">
	  	<a href="naga.html">
	    <img src="naga.png" style="width:100%"></a>
	  </div>
	   <div class="column" style="text-align:center">
	  	<a href="kamat.html">
	    <img src="kamat.png" style="width:100%"></a>
	  </div>
	</div>
	<h1>Nagarjuna</h1>

	<div style="text-align:center;color:white;font-family:Lato">
	<p style="font-size:22px;color:white;"><br><br>About <b><i style="font-size:24px;color:orange">Nagarjuna</i></b><br><br><i style="font-weight:lighter;font-size:21px"> Nagarjuna Restaurant is a South Indian restaurant visited by many families and friends.<br>Very famous for its non vegetarian dishes.Visit this restaurant to enjoy sumptuous Andhra food.</i><br><br><br>

	<i style="color:orange; font-size:28px" class="fa fa-map-marker"></i><br> Shanti Nagar, Bengaluru<br><br></p>
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
	    <img src="nagarjuna1.jpeg" width = "270px" height="160px"></a>
	  </div>
	   <div class="column2">
	    <img src="nagarjuna2.jpeg" width = "270px" height="170px"></a>
	  </div>
	  	   <div class="column2">
	    <img src="nagarjuna5.jpeg" width="270px" height="190px"></a>
	  </div>
	  	   <div class="column2">
	    <img src="nagarjuna3.jpeg" width = "270px" height="170px"></a>
	  </div>
	  	   <div class="column2">
	    <img src="nagarjuna4.jpeg" width = "270px" height="160px"></a>
	  </div>
	</div>
	<h2><center><br><br>&nbsp; ~ MENU ~</center></h2>
	<center>

		<button class="accordion" id="2" style="text-align:center;font-size:22px"><img src="veg.png" width="20px" align="left">Bhojanam</button>
		<div class="panel" style="text-align:center; background-color:black; color:white;font-size:22px">
			<center><p>A sumptuous tradional Andhra meal served on a banana leaf, with unlimited <br>piping-hot rice and ghee, savoured with rasam, sambhar, spinach dal,<br> vegetable stir fry, chutney, buttermilk, curd, papads and sweet. <pre style="font-size:22px"> Rs. 195.00/-</pre></center>
		  	<button class ="add" style="text-align:center" id="add2" onclick="register(this)">+</button>
		</div>

		<br><button class="accordion" id="3" style="text-align:center;font-size:22px"><img src="nonveg.jpg" width="20px" align="left">Kodi Biryani</button>
		<div class="panel" style="text-align:center; background-color:black; color:white;font-size:22px">
			<center><p> Flavourful seasoned basmati rice and chicken, made with just the right spiceness,<br> an inspiration from the coastal Andhra, served with raitha and sherva.<pre style="font-size:22px"> Rs. 240.00/-</pre></center>
			<button class ="add" style="text-align:center" id="add3" onclick="register(this)">+</button>
		</div>

		<br><button class="accordion" id="4" style="text-align:center;font-size:22px"><img src="veg.png" width="20px" align="left">Tarkari Biryani</button>
		<div class="panel" style="text-align:center;background-color:black; color:white;font-size:22px">
		  	<center><p>Flavourful spiced and seasoned basmati rice inspired from coastal andhra with <br>fresh vegetables, served with raitha.<pre style="font-size:22px"> Rs. 200.00/-</pre></center>
		  	<button class ="add" style="text-align:center" id="add4" onclick="register(this)">+</button>
		</div>

		<br><button class="accordion" id="5" style="text-align:center;font-size:22px"><img src="nonveg.jpg" width="20px" align="left">Mamsam Biryani</button>
		<div class="panel" style="text-align:center;background-color:black; color:white;font-size:22px">
			<center><p>Flavoured seasoned basmati rice and spiced tender lamb with raitha and sherva.<pre style="font-size:22px"> Rs. 280.00/-</pre></center>
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

    	window.location.href="naga.php";

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