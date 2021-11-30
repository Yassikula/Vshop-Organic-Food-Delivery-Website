<?php
include "head.php";
include "config.php";



?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery-3.5.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<body>

<style>
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
<table  style="    margin-top: 213px;">
					<tr>
					<th width="0%">Item image</th>

						<th width="0%">Item Name</th>
						<th width="0%">Quantity</th>
						<th width="0%">Price</th>
						<!-- <th width="%">Total</th> -->
				
					</tr>
					<?php
          
					if(isset($_SESSION['shopping_image']) && !empty($_SESSION["shopping_image"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_image"] as $values)
						{
					?>
					<tr>
					<td><img src="assets/img/portfolio/<?php echo $values["item_image"]; ?>" alt="<?= $values['item_name'] ?>" style= width:190px;></td>
					<td><?=$values["item_name"]; ?></td>

					
						<!-- <td ><?php echo $values["item_quantity"]; ?></td> -->
	   <input type="number" id="myNumber"name="quantity" value="<?php echo $values["item_quantity"]; ?>" class="qt" style="   height: 28px;text-align: center;font-size: 15px;" />

						<td> <?php echo $values["item_price"]; ?></td>
						<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a  onclick="return confirm('Are you sure you want to delete this entry?')" href="vegetable.php?action=delete&id=<?php echo $values["item_id"]; ?>">
						<span style="width: 22px; color: white; height: 20px; background: rgba(15, 86, 132, 1);; border-radius: 50%;text-align: center;" class="fa fa-times"></span></a></td>
					
                        <!-- <button type ="submit">order</button> z-->
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
							
						}
					?>
					<tr>
						<td style=" font-weight: bold" colspan="3" align="right">Total</td>
						<td  style=" font-weight: bold" align="right">Rs <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
					
				</table>
					
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
