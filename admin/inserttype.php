<?php 
include "nav.html";

$connect = mysqli_connect("localhost", "root", "", "vegetables");

	if (isset($_POST['submit'])) {
		// get variables from the form
    // $code_ = $_POST['code'];
		$name_ = $_POST['name'];
		// $image_ = $_POST['image'];
		// $price_ = $_POST['price'];
    $type_ = $_POST['type'];
		//write sql query

		
    $sql = "INSERT INTO `type`(`name`, `type`) VALUES ('$name_','$type_')";
		// execute the query

		$result = $connect->query($sql);

		if ($result == TRUE) {
      
      echo '<script>alert("Item inserted successfuly")</script>';
			echo '<script>window.location="insertitem.php"</script>';
		}else{
			echo "Error:". $sql . "<br>". $connect->error;
		}

		$connect->close();

	}

  ?>

<!DOCTYPE html>
<html>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">

<style>
/* body {
	background:  #336699;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
} */
.bodyf {
  /* background:  #336699; */
  justify-content: center;
  align-items: center;
  display: flex;
	/* display: flex; 
	 justify-content: center; 
	/* align-items: center; */
	/* height: 100vh; */
	/* flex-direction: column; */
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  h2 {
	text-align: center;
	margin-bottom: 40px;
}

</style>



<h2 >Add Item Type </h2>
<div class="bodyf">
<form  action="" method="POST" >


<label>Choose a type:</label>
  <select name="type" >
    <option value="vegetable">Vegetables</option>
    <option value="fruit">Fruits</option>
    <option value="canproduct">Canned Products</option>
    <option value="fruitproduct">Fruit Products</option>
    <option value="vegeproduct">Vegetable Products</option>
  </select>

   <lable> Item Name </lable> 
    <input type="text" name="name" required>

    
    <input type="submit" name="submit" value="submit">
   

<div>
  
</form>

</div>

</div>




</body>
</html>


