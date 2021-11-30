<?php 
// include "server.php";
// include "Login-registration/home.php";
// include "footer.php";
include "head.php";
$connect = mysqli_connect("localhost", "root", "", "vegetables");

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
				// echo '<script>window.location="order.php"</script>';
			}
		}
	}
}

// delete wishlist item 


if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_wish"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_wish"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="wishlist.php"</script>';
			}
		}
	}
}
// delete product page item 


if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_image"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_image"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				// echo '<script>window.location="singleproduct.php"</script>';
			}
		}
	}
}
// margin-right: -201px;
// margin-left: -18px;
?>
<!DOCTYPE html>
<html>
	<head>
		
		
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



	
<body>

<style>

.btn {
  background-color:#1e562f;
  border: none;
  color: white;
  padding: 34px 22px;
    font-size: 18px;
  cursor: pointer;
}

.btn:hover {
  background-color: RoyalBlue;
}
body{

	background-color: #f5f3ea;
	
	min-height:100vh;
}

.span1{
	color:black;
	/* font-weight:800; */
	font-size:15px;
	width: 100%;
  margin-left: 69px;
    margin-top: 28px;
    display: inline-block;
    right: 6px;
	font-family: "PT Sans", "Helvetica Neue", Verdana, Arial, sans-serif;
	font-weight: 500;
	
}
.span2{
	color:black;
	/* font-weight:800; */
	font-size: 16px;
	width: 100%;
    display: inline-block;
    margin-left:-210px;

	font-family: "PT Sans", "Helvetica Neue", Verdana, Arial, sans-serif;
	font-weight: 600;
	
	
}

.bbt {
    /* background-color: #00CCF2; */
    color: white;
    border: none;
    /* border-radius: 4px; */
	cursor: pointer;
	font-size: 15px;
	text-align: center;
	font-family: sans-serif;
	position: relative;

	left: 20px;
}
.card {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  
}

  }
  h1{
	font-family: sans-serif;

  }

 /* .bbt:hover {
    background-color: #005766;
  }
   */
  .card img {
  width: 220px;
  height:220px;
  margin-left: -11px;
  overflow: hidden;  position: relative; 
}

.cardbody{

	width: 82%;
	transition-timing-function: ease-out;
	transition: all 0.3s ease-out; 
	position: absolute;
    left: 20px;
bottom: -40px;
background: rgba(15, 86, 132, 1);
}
.cardsearch{

width: 22%;
transition-timing-function: ease-out;
transition: all 0.3s ease-out; 
position: absolute;
left: 80px;
bottom: 409px;
background: rgba(15, 86, 132, 1);
}
.card:hover .cardbody {
	bottom:2px;

	 /* height: 380px;  */
	 /* border :solid; */
	 /* padding:15px; */
	/* transition-timing-function: zoom-in;  */
	/* width: 270px; */
 transform: scale(1.1 , 1.2);
 /* transform:translateY(100%); */
 transition-timing-function: ease-out;
 transition: all 0.3s ease-out; 

}
.card:hover .cardsearch {
	bottom:275px;

	 /* height: 380px;  */
	 /* border :solid; */
	 /* padding:15px; */
	/* transition-timing-function: zoom-in;  */
	/* width: 270px; */
 transform: scale(1.1 , 1.2);
 /* transform:translateY(100%); */
 transition-timing-function: ease-out;
 transition: all 0.3s ease-out; 

}
.fa:hover {
    opacity: 0.5;
}

.atext
{
	color:rgba(15, 86, 132, 1);
    font-weight: 700;
    font-size: 20px;
    text-transform: uppercase;
	top: 212px;
    position: absolute;
	font-size: 30px;
}
.button:hover{
	background-color:rgba(86, 142, 175, 1);
}

.qt{
	color: #495057;
    background-color: #fff;
    /* background-clip: padding-box; */
    border: 0px solid gray;
    position: relative;
    left: 20px;
    right: 45px;
	width: 50px;
	padding-top: 22px;
    padding-bottom: 16px;
}
}

}

	</style>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<link href="assets/css/style.css" rel="stylesheet">


		<br />
<title>Vegetables-Home</title>
	
	
		<!-- <div class="column" style = "inline">  -->
		<div class="container"  >
			<br />
			<br />
			<br />
			<br />
			<br />
		

			<div class="row">
			<div class="col-sm">
            <h1>VEGETABLES</h1>
			<br />

            <!-- <div class="d-flex"> -->
                <div class="card-deck" style="margin-right: -201px; margin-left: -168px;" >
			<?php
				$query = "SELECT * FROM tbl_product WHERE type= 'vegetable' ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>

	 <!-- <div class="col-md-3"> -->
	 <form method="post" action="vegetable.php?action=add&id=<?php echo $row["id"]; ?>"  >
  
   <div class="card" style="width:18rem; padding:20px;width: 240px; margin-left: 105px;
        border: solid;border-width: thin;border-color: ghostwhite;overflow: hidden;    margin-bottom: 40px;    " >

	   <div style="width: 310px;">
	   
	   <!-- <a href="singleproduct.php"> -->
		   <img class="card-img-top"  name="hidden_image" src="assets/img/portfolio/<?php echo $row["image"]; ?>" onclick="confirm();"></a>
		   </div>
		   <div class="d-flex justify-content-between" style="margin-top:7px; height: 100px;width: 257px;">
<br>
		   <span class="span1" ><?php echo $row["name"]; ?></span><br>
		   <lable style="    position: absolute;  left: 75px; top: 286px;" >Per  250 g(s)</lable>
	   <span class="span2"> Rs<?php echo $row["price"]; ?></span>

	   </div>

	   <div class="cardbody" >
 
	   <input type="number" id="myNumber"name="quantity" value="1" class="qt" style="   height: 28px;text-align: center;font-size: 15px;" />
       <button type="submit" name="add_to_cart" style="   border: none;  color:white;
    background: none; width: 100px;height: 38px;font-weight: 400;font-size:26px;border-radius: 0px;"  class="fa fa-shopping-cart"  >  </button>
<div>


<div class="cardsearch" >



	 <button onclick="confirm()" name="add_to_image" style=" border-radius: 30px; background: none; height: 28px; 
	    font-size:17px; margin-left: 5px; width: 30px;text-align: center; color:white;border: none;" ><i class="fa fa-search-plus"></i></button></a>
		   </div>

	   <button type="submit" name="add_to_wish"  class="fa fa-heart"  style=" border-radius: 30px; background: none; height: 28px; 
	    font-size:17px; top: 4px; width: 30px;text-align: center; color:white; position: absolute; left: 144px;;border: none;" ></button>
	   </div>
	   </div>

		   </div>

		 
	   

		   <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

		   <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
		   <input type="hidden" name="hidden_image" value="<?php echo $row["image"]; ?>" />


			

   </form>
				<?php }
                    } else {
                        echo "no products available";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
 <br><br><br><br><br>


<?php	
		include "footer.php";

	?>	
	</body>
</html>

<?php

?>


<script>
function myFunction() {
  document.getElementById("myNumber").stepUp();
}
</script>


<!-- <script src="../New_Header/jshead/jquery-3.2.1.min.js"></script>
<script src="../New_Header/jshead/bootstrap.min.js"></script>
<script src="../New_Header/jshead/jquery.slicknav.min.js"></script>
<script src="../New_Header/jshead/jquery.zoom.min.js"></script>
<script src="../New_Header/jshead/main.js"></script> -->

<script src="footerjs.js"></script>


  <script>
function confirm() {
    location.href = "singleproduct.php";
    
  }
</script>

