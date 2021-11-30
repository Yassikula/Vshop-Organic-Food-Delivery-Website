<?php 
include "../config.php";

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write delete query
	$sql = "DELETE FROM `tbl_product` WHERE `id`='$user_id'";

	// Execute the query

	$result = $conn->query($sql);

	// if ($result == TRUE) {
	// 	echo "Record deleted successfully.";
	// }else{
	// 	echo "Error:" . $sql . "<br>" . $conn->error;
	// }


		
	if ($result == TRUE) {
	

		echo '<script>alert("Item Removed")</script>';
		echo '<script>window.location="viewitem.php"</script>';
	}
		
}

?>