
<?php
session_start();

// include "Login-registration/home.php";

$connect = mysqli_connect("localhost", "root", "", "vegetable");

// delete cart item 

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION['shopping_cart'], "item_id");

		
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				 'item_name'			=>	$_POST["hidden_name"],
				 'item_image'			=>	$_POST["hidden_image"],
				 'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
			
		}


		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET['item_id'],
			'item_name'			=>	$_POST["hidden_name"],
			'item_image'			=>	$_POST["hidden_image"],

			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION['shopping_cart'][0] = $item_array;
		sort($item_array);

	}
}

// wishlist

if(isset($_POST["add_to_wish"]))
{
	if(isset($_SESSION["shopping_wish"]))
	{
		$item_array_id = array_column($_SESSION['shopping_wish'], "item_id");

		
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_wish"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				 'item_name'			=>	$_POST["hidden_name"],
				 'item_image'			=>	$_POST["hidden_image"],
				 'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_wish"][$count] = $item_array;
			
		}


		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET['item_id'],
			'item_name'			=>	$_POST["hidden_name"],
			'item_image'			=>	$_POST["hidden_image"],

			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION['shopping_wish'][0] = $item_array;
	}
}


// image add 
if(isset($_POST["add_to_image"]))
{
	if(isset($_SESSION["shopping_image"]))
	{
		$item_array_id = array_column($_SESSION['shopping_image'], "item_id");

		
		if(!in_array($_GET["id"], $item_array_id))
		{
			$item_array = array(
				'item_id'			=>	$_GET['item_id'],
				'item_name'			=>	$_POST["hidden_name"],
				'item_image'			=>	$_POST["hidden_image"],
	
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION['shopping_image'][0] = $item_array;
		}



	}
} 
	


?>
<!DOCTYPE html>
<html>
	<head>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
		  <!-- header styles -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="bootstrap.min.css"/>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<!-- <link rel="stylesheet" href="css/icomoon.css"> -->
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- <script src="js/modernizr-2.6.2.min.js"></script> -->

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/about_style/style.css">


		<body>
            <style>
/*  */

.wish{

	position: absolute;
    font-size: 9px;
    left: -145px;
    background: red;
    border-radius: 81%;
    height: 17px;
    font-weight: 900;
    width: 17px;
    text-align: center;
    color: white;
    top: 33px;
}


.cartt{

    position: absolute;

    font-size: 9px;
    left: -88px;
    background: red;
    border-radius: 81%;
    height: 17px;
    font-weight: 900;
    width: 17px;
    text-align: center;
    color: white;
    top: 33px;
}

#myInputw {
  background-image: url('assets/img/portfolio/h1.png');
  /* background-position: 0px -14px; */
  background-repeat: no-repeat;
  width: 40%;
  font-size: 16px;
  padding: 24px 81px 9px 0px;
  border: 1px solid #ddd;
  top: 37px;
  border: none;  
  position: absolute;
  left: -170px;

}

#myInput {
  background-image: url('assets/img/portfolio/c3.png');
  /* background-position: 0px -14px; */
  background-repeat: no-repeat;
  width: 40%;
  font-size: 16px;
  padding: 24px 81px 9px 0px;
  border: 1px solid #ddd;
  top: 37px;
  border: none;  
  position: absolute;
  left: -111px;

}

}
.botton{

background :none;
}


#navbar {
  /* background-color:white; */
  position: fixed;
  top: 25px;
  /* width: 100%; */
  /* display: block; */
  transition: top 0.3s;
  right: -200px;
}

#navbar a {
  float: left;
  display: block;
  color: #fff;
  text-align: center;
  /* padding: 20px; */
  padding-bottom: 21px;
  text-decoration: none;
  font: 400 13px/1.35 PT Sans, Helvetica Neue, Verdana, Arial, sans-serif;
}

#navbar a:hover {
  /* background-color: #ddd; */
  color: rgba(181, 155, 110, 1);

}

.btc{

	width: 10%;
    background-color:  #00b8e6;
    color: white;
    padding: 14px 20px;
    /* margin: 8px 0; */
    border: none;
	cursor: pointer;
	width: 180px;

	font-size: 17px;


}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0px;
  background-color: white;
  /* overflow-x: hidden; */
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  cursor: pointer;
  color: rgb(44 54 64);

}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


/* dropdown  */


.dropbtn {
  /* background-color: #4CAF50; */
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  

}

.dropdown {
  position: relative;
  display: inline-block;
 

}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  left: -647px;
  top:56px;

}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  left: -49px;

}

td {
	color: black;
}


.dropdown:hover .dropdown-content {display: block;}

</style>


<!-- <div class="colorlib-loader"></div> -->

	<div   style= "background: #f8f9fa!important;">
		<nav class="colorlib-nav" role="navigation"  >
			<div class="top-menu" id="navbar" style ="padding-top: 40px; left:15px;      margin: -25px;   background: rgba(44, 54, 64, 1);">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div ><a href="index.php"><img style="margin-left: -206px;width: 138px;"src="assets/img/portfolio/logo.png" alt=""></a></div>
			

						</div>
						<div class="col-md-10 text-right menu-1"  >
							<ul  >
							
								<li><a href="index.php">Home</a></li>
								<li><a href="vegetable.php">Vegetable</a></li>
								<li><a href="fruit.php">Fruits</a></li>
								<li><a href="product.php">Product</a></li>
							
								
								<li ><a href="aboutus.php">About Us</a></li>
								
								<li><a href="contact.php">Contact</a></li>
								<li><a href="Login-registration/index.php">Sign IN</a></li>
								<div class="header-top" style= " position: absolute; left: 892px;top: -25px;">
		
					
<!-- wishlist -->
<li>
								
								<a href="wishlist.php"  class="botton" id="myInputw" onkeyup="myFunction()"></a>	</li> 

								<?php

if (isset($_SESSION['shopping_wish'])){
	$count = count($_SESSION['shopping_wish']);
	echo "<span id=\"cart_count\" class=\"wish\">$count</span>";
}else{
	echo "<span id=\"cart_count\" class=\"wish\">0</span>";
}

?>

	<!-- cart -->
								<li>
								
								<a   class="botton" onclick="openNav()" id="myInput" onkeyup="myFunction()"></a>	</li> 

								<?php

if (isset($_SESSION['shopping_cart'])){
	$count = count($_SESSION['shopping_cart']);
	echo "<span id=\"cart_count\" class=\"cartt\">$count</span>";
}else{
	echo "<span id=\"cart_count\" class=\"cartt\">0</span>";
}

?>
<!-- side cart   -->

<div style=" color:white;" id="mySidenav" class="sidenav">
  <span href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</span>
  <table style="    margin-inline-start: 100px;">
					<tr>
				
				
					</tr>
					<?php
					if(isset($_SESSION['shopping_cart']) && !empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $values)
						{
					?>
					<tr>
					<td  style= "position: relative; color: black"><?php echo $values["item_name"]; ?></td>

						<td style= "position: relative; left: -27px;"> Qty: <?php echo $values["item_quantity"]; ?></td>
	   <!-- <input type="number" name="quantity" value="<?php echo $values["item_quantity"]; ?>" class="qt" style=" height: 28px;text-align: center;font-size: 15px;" /> -->

						<!-- <td style="    position: relative; top: -8px;left: -17px;">LKR. <?php echo $values["item_price"]; ?></td> -->
						<td style="    position: relative;     top: 28px; left: -78px;">LKR.<?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td style="padding: 40px;"><a   href="head.php?action=delete&id=<?php echo $values["item_id"]; ?>">
						<span style="    margin-left: -127px;width: 22px; color: white; height: 20px; background: rgba(15, 86, 132, 1);; border-radius: 50%;text-align: center;" class="fa fa-times"></span></a></td>
					
                        <!-- <button type ="submit">order</button> z-->
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
							
						}
					?>
					<tr>
						<td style=" font-weight: bold; position: relative; bottom: -275px;    left: 11px;" colspan="3" >Total</td>
						<td  style=" font-weight: bold;  position: relative;left: -60px; top: 263px;" > LKR. <?php echo number_format($total, 2); ?>
					
					</tr>
					<?php
					}
					?>
					
				</table>

				<a href="order.php" style="  margin-top: 327px;  width: 100%;  border-radius: unset; background-color:rgba(15, 86, 132, 1);" class="btn btn-2">Go to Cart</a>

</div>

<div id="main">
 
  <span style="font-size:30px;cursor:pointer; color:white; left: -300%;position: relative;" > </span>
</div>
									</div></div>
									</div>	</div></div>
									</div></div>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>





					
	</head>	
	<script src="js/jquery.min.js"></script>
	
	<script src="js/jquery.waypoints.min.js"></script>
	
	<script src="js/jquery.magnific-popup.min.js"></script>
	
	<script src="js/main.js"></script>

	<script>
	window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "0px";
  }
}
</script>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}

</script>