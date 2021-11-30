<?php
include "head.php";
include "config.php";


$connect = mysqli_connect("localhost", "root", "", "vegetable");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
	
	}

}

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


?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery-3.5.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<body>

<style>

body{
	margin-top: 304px;
}
}
.cardbody{

width: 82%;
transition-timing-function: ease-out;
transition: all 0.3s ease-out; 
position: absolute;
left: 20px;
bottom: 405px;
/* background: rgba(15, 86, 132, 1); */
}

/* .card {
  /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); */
  max-width: 300px;
  margin: auto;
  text-align: center;
  /* font-family: arial; */
} */

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
.plusminus{

width: 31px;
  height: 33px;
  border-radius: 50%;
}
.card button:hover {
  opacity: 0.7;
}
</style>
<?php
if(isset($_SESSION['shopping_wish']) && !empty($_SESSION["shopping_wish"]))
                        $total = 0;
                        {
						foreach($_SESSION["shopping_wish"] as $values)
						{
          ?>
	 <!-- <form   method="post" action="wishlist.php?action=add&id=<?php echo $row["id"]; ?>" style=" position: relative;width: 62%;margin-left: 21%;"  > -->
          
<div class="card" style=" padding-bottom: 60px;padding-top: 28px; width: 65%;margin-left: 240px;">
						<span width="5%" style="width: 22px; color: white; height: 20px; background: rgba(15, 86, 132, 1); border-radius: 50%;text-align: center;margin-left: 95%;"
						 class="fa fa-times">
<a  onclick="return confirm('Are you sure you want to delete this entry?')" href="wishlist.php?action=delete&id=<?php echo $values["item_id"]; ?>">
            
            
            </span>

  <img style= "width: 180%;   position: relative; width: 42%;position: relative;   left: -2%; top: -51px; padding: 40px;" 
   src="assets/img/portfolio/<?php echo $values["item_image"]; ?>" alt="<?= $values['item_name'] ?>" style="width:100%">
  <h1 style=" position: relative; top: -237px;right: -206px;"></h1>
  <div style="margin-left: 40%; margin-top: -347px;">
  <p style=" position: relative;     top: 23px;font-size: 24px;"><?=$values["item_name"]; ?></p>
  <p  > LKR.<span id="price"  ><?php echo $values["item_price"]; ?></span></p>

  <!-- <p><input  id="total" class="total"  value="<?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?>"></p> -->
						
            </div>
  
    <div style="margin-left: 40%;position: relative;top: -12px;">
    <input class="plusminus" type="button" name="subtract" id="subtract" value="-"></input>

<input  type="text" id="qty" value="<?php echo $values["item_quantity"]; ?>" style=" height: 28px;text-align: center;font-size: 15px;width: 45px;" />
   <input class="plusminus" type="button" name="add" id="add" value="+"></input>
            </div>

            <div  style="margin-left: 40%;">
       <button type="submit" name="add_to_cart" style="  color:white;
    background: rgba(15,86,132,1);; width: 149px;height: 47px;font-weight: 400;font-size:13px;" > ADD TO CART </button>
<!-- <div class= "heartbtn"> -->

	   

            </div>
		

<?php
							
					?>
                    
	   </div>
	   </div>

		   </div>
</div>
<!-- </form> -->

<?php
                         }    }
                   
                     
					?>
					
</body>
    </html>
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



<script>
function confirm() {
    location.href = "singleproduct.php";
    
  }
</script>