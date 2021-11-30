<?php 
// require_once 'sessionlog.php';
// session_start();
include "head.php";
include "config.php";

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
				echo '<script>window.location="order.php"</script>';
			}
		}
	}
}


?>


<!DOCTYPE html>
<html>
	<head>
		<!-- <title>Webslesson Demo | Simple PHP Mysql Shopping Cart</title> -->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="jquery-3.5.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		
	</head>
<title>Your order details</title>

	<body>

<style>

body{

background-color: #eee !important;

min-height:100vh;
}
#customers {

  width: 48%;
  /* border: 3px solid  #0086b3; */
  border-bottom: 2px solid #ddd;
  font-size: 17px;
  text-align: left;
}

#customers td, #customers th {

  vertical-align: middle;
  text-align: left;
  color: black;
  
  border: none;
    background: none;

}

/* #customers tr:nth-child(even){background-color: #f2f2f2;} */

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
 
  color: black;
  height: 70px;
  text-align: left;
  font-size: 13px;
  font-family: sans-serif;
  border-bottom: 2px solid #ddd;
}

h3 {
	text-align: left;
	
	color:#2d5986;

}

.bto{
	
    background-color: #00e600;
    color: white;
    padding: 14px 20px;
    /* margin: 8px 0; */
    border: none;
	cursor: pointer;
	width: 290px;
	margin-inline-end: 350px;
	font-family: sans-serif;
	font-size: 17px;


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


  
  .bto:hover {
    background-color: #008000;
  }
  
  .btc:hover {
    background-color: #006680;
  }


</style>

	
			<div class="container" id="customers" style="margin-top: 235px;  ">
			<h3 style="    margin-left: 257px; top: 75px; position: relative;">Shopping Cart </h3><br>

			<br>
			<br>
	
				<table>
					<tr>
					

						<th width="20%">PRODUCT NAME</th>
						<th width="20%">UNIT PRICE</th>
						<th width="15%">QUANTITY</th>
						<th width="5%">TOTAL</th>

					
						<!-- <th width="0%" style="position: relative;left: 169px;">Total</th> -->
				
					</tr>
					<?php
					if(isset($_SESSION['shopping_cart']) && !empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $values)
						{
					?>
					<tr>
					<td width="20%"><?=$values["item_name"]; ?> <a  style= "  font-size: 13px;">Size:250g</a>  </td>
					<!-- <lable style="font-size: 13px;  position: relative;top: 176px;left: 222px;">Size:250g </lable> -->
					<td width="10%" > LKR.<span id="price"  ><?php echo $values["item_price"]; ?></span></td>
					
			
					<td width="15%">
					
						<input type="button" name="subtract" id="subtract" value="-"></input>

						<input type="text" id="qty" style="width: 35px;text-align-last: center;" value="<?php echo $values["item_quantity"]; ?>"
						 style=" height: 28px;text-align: center;font-size: 15px;" />
     					<input type="button" name="add" id="add" value="+"></input></td> 

					
						<!-- total  -->
						<td><input  id="total" class="total"  value="<?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?>"></td>
<td><lable id = "sum"> <?php echo number_format($total, 2); ?></lable></td>
						
					
						<td ><a  onclick="return confirm('Are you sure you want to delete this entry?')" href="order.php?action=delete&id=<?php echo $values["item_id"]; ?>">
						<span width="5%" style="width: 22px; color: white; height: 20px; background: rgba(15, 86, 132, 1); border-radius: 50%;text-align: center;"
						 class="fa fa-times"></span></a></td>

					

					</tr>
					<?php

							$total = $total + ($values["item_quantity"] * $values["item_price"]);
							
						}
					?>
			
					<?php
					}
					?>
							
				</table>


			</div>
		</div>
	</div><br />
	<div style="position: absolute;left: 420px;">
	<a href="index.php">
						<button type ="submit" class="bto">Continue Shopping</button></a>
						<a href="#">
						<button type ="submit" class="btc" >Check out</button></a>
	
						</div>





    		
	</body>
	<?php	
		// include "footer.php";

	?>
</html>


<script>
function myFunction() {
  document.getElementById("myNumber").stepUp();
}
</script>

<!-- qty increment  -->
<script>
$(function() {
    var price = parseFloat($('#price').text());
  
    $('#subtract').on("click",function() {
      var $qty = $('#qty');
      var current = parseInt($qty.val());
      if ( current > 0 ) {
          $qty.val(current-1);
          $('#total').val(price*(current-1));
      } else {
          $('#total').val(0);
      }
	  
    });
  
    $('#add').on("click",function() {
      var $qty = $('#qty');
      var current = parseInt($qty.val());
      $qty.val(current+1);
      $('#total').val(price*(current+1));
    });
  });   
</script>




<!-- // get total  -->

<script>
$(document).ready(function () {

	$('.total'). blur(function () {

		var sumdata = 0;
		$('.total'). each(function (){

			if($(this).val() != "")
			{
				sumdata += parseFloat($(this).val()) ;
			
			}
		});
			$("#sum").html(sumdata);
	});
	
});
	</script>