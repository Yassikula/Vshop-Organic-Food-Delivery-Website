<?php 
include "../config.php";
include "nav.html";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
        $code_ = $_POST['code'];
        $user_id = $_POST['user_id'];
		$name_ = $_POST['name'];
		$image_ = $_POST['image'];
		$price_ = $_POST['price'];
		// write the update query
		$sql = "UPDATE `tbl_product` SET `code`='$code_',`name`='$name_',`image`='$image_',`price`='$price_' WHERE `id`='$user_id'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo '<script>alert("Item updated successfuly")</script>';
			echo '<script>window.location="viewitem.php"</script>';
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `tbl_product` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
            $Icode = $row['code'];
            $Iname = $row['name'];
            $Iimage = $row['image'];
            $Iprice = $row['price'];
            $id = $row['id'];
		}

	?>


<!DOCTYPE html>
<html>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">

<style>
.bodyf {
  background:  #336699;
  justify-content: center;
  align-items: center;
  display: flex;
}

input[type=submit] {
    width: 100%;
    background-color: #e60000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  input[type=text], select {

	color:#0099cc;
  }
  input[type=submit]:hover {
	background-color:#b30000;
	
  }
  h2 {
	text-align: center;
	margin-bottom: 40px;
}

</style>
<div class="bodyf">
		<form action="" method="post">
		<h2>Item Update Form</h2>
		
		<lable>  Item Code </lable> 
	
		    <input type="text" name="code" value="<?php echo $Icode; ?>" required>
		    <input type="hidden" name="user_id" value="<?php echo $id; ?>">
		    
			<lable>  Name </lable> 
		 
		    <input type="text" name="name" value="<?php echo $Iname; ?>"required>
			
			<lable> Add Image</lable> 
  <div class="col-md-4">
			
		    <input type="file" name="image" style=" width: 115px;" value="<?php echo $image; ?>"required>
            </div>
		   
   <lable>  Price (per 250g)</lable> 
		    
		    <input type="text" name="price" value="<?php echo $Iprice; ?>"required>
		   
			<input type="submit" value="Update" name="update">
		   
		 
		</form>
</div>
		</body>
		</html>




	<?php
	} 
	else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: viewitem.php');
	}

}
?>