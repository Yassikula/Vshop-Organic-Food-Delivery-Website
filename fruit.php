<?php 
// include "server.php";
// include "Login-registration/home.php";

// include "footer.php";

include "head.php";
$connect = mysqli_connect("localhost", "root", "", "vegetables");

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
				echo '<script>window.location="order.php"</script>';
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
		
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  -->
		  <!-- header styles -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

<!-- <link rel="stylesheet" href="../New_Header/cssh/bootstrap.min.css"/>
<link rel="stylesheet" href="../New_Header/cssh/flaticon.css"/>
<link rel="stylesheet" href="../New_Header/cssh/style.css"/>  -->
<!-- header styles -->

	
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
    margin-left: 68px;

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

.card:hover .cardbody {
	bottom:30px;

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


<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="admin/style.css"> -->
		
<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">
<!-- <link href="assets/css/styles.css" rel="stylesheet"> -->

		<br />
<title>Vegetables-Fruits</title>
	
	
		<!-- <div class="column" style = "inline">  -->
		<div class="container"  >
		<br />
			<br />
			<br />
			<br />
			<br />
		
			<div class="row">
			<div class="col-sm">
		
		
            <h1>FRUITS</h1><br>
            <!-- <div class="d-flex"> -->
                <div class="card-deck" style="margin-right: -201px;display: inline-flex;  margin-left: -168px;" >
			<?php
				$query = "SELECT * FROM tbl_product WHERE type= 'fruit' ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>

	 <!-- <div class="col-md-3"> -->
	 <form   method="post" action="fruit.php?action=add&id=<?php echo $row["id"]; ?>"  >
  
   <div class="card" style="width:18rem; padding:20px;width: 240px;margin-left: 105px;
      border: solid;border-width: thin;border-color: ghostwhite;; overflow: hidden;  position: relative;     " >

	   <div style="width: 310px;">
		   <img class="card-img-top" name="image"  src="assets/img/portfolio/<?php echo $row["image"]; ?>"   />
<br>
		   <span class="span1" ><?php echo $row["name"]; ?></span><br>
		   <lable style="    position: absolute;  left: 90px; top: 310px;" >Per  250 g(s)</lable>
	   <span class="span2"> Rs<?php echo $row["price"]; ?></span>

	   </div>

	   <div class="cardbody" >
<!-- 	   
	   <input type="number" id="myNumber"name="quantity" value="1" class="qt" style="    height: 38px; width: 72px;text-align: center;font-size: 15px;" />
	   <button type="submit" name="add_to_cart" style="    width: 80px;height: 38px;text-align: center;" class="bbt" >CART</button> -->

 
	   <input type="number" id="myNumber"name="quantity" value="1" class="qt" style="   height: 28px;text-align: center;font-size: 15px;" />
       <button type="submit" name="add_to_cart" style="   border: none;  color:white;
    background: none; width: 100px;height: 38px;font-weight: 400;font-size:26px;border-radius: 0px;"  class="fa fa-shopping-cart"  >  </button>
<div class= "heartbtn">

	   <button type="submit" name="add_to_wish"  class="fa fa-heart"  style=" border-radius: 30px; background: none; height: 28px; 
	    font-size:17px; top: 4px; width: 30px;text-align: center; color:white; position: absolute; left: 144px;;border: none;" ></button>
	   </div>
	   </div>

		   </div>
	   

		   <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

		   <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

		   <!-- <button type="submit" onclick="addone()"  name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" ></button> -->
			

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
 <br><br><br>


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


<script src="../New_Header/jshead/jquery-3.2.1.min.js"></script>
<script src="../New_Header/jshead/bootstrap.min.js"></script>
<script src="../New_Header/jshead/jquery.slicknav.min.js"></script>
<script src="../New_Header/jshead/jquery.zoom.min.js"></script>
<script src="../New_Header/jshead/main.js"></script>

<script src="footerjs.js"></script>



