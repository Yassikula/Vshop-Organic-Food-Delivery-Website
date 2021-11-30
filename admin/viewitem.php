<?php 
include "nav.html";

//write the query to get data from users table

$connect = mysqli_connect("localhost", "root", "", "vegetable");

$sql = "SELECT * FROM tbl_product";

//execute the query

$result = $connect->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>


<!------popup cancel-->
<!-- <div class="popup" id="popup-1" >
    <div class="overlay"></div>
      
      <div class="content" style="top: 60%">
        <div class="close-btn" onclick= "togglePopup()" >
          </div>
        
          <div class="ctext">
          <lable   for="click"></lable>
          <hr style="width:30%;border-width: 0px;;margin-left:10%"><br>
            <h4 > Are you sure ?</h4>
        
            <h6>This will cancel your payment</h6>
          
  
          </div>
          <div>
            
            <button  class="cancel_btn1" style="left: 30%" onclick= "togglePopup()"> cancel</button>
            <button type="submit" class="cancel_btn" style="left: 60%" onClick="refreshPage()"> Ok</button>
          </div>
    </div>
    
  </div> -->

<style>

	/* serach  */
	#myInput {
  background-image: url('search.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 80%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}


body {
  /* background-color: #fefbd8; */
  background-image: url("i1.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 1690px 860px;
  
/* opacity: 6.5;  */

}


/* table {
  width: 100%;
  border-collapse: collapse;
  border: 1px solid black;
}



tr:nth-child(even) {background-color: #f2f2f2;}

th {
  background-color: #4CAF50;
  color: white;
  padding: 10px;
} */

#customers {
  font-family: Arial, Helvetica, sans-serif;
  /* border-collapse: collapse; */
  width: 60%;
  /* border: 2px solid black; */
}

#customers td, #customers th {
  /* border: 1px solid #ddd; */
  padding: 8px;
  vertical-align: middle;
  text-align: center;
  color: black;

}


/* #customers tr:nth-child(even){background-color: #f2f2f2;} */

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #2d5986;
  color: white;
  height: 70px;
  text-align: center;
  

}

/* } */
  h2 {
	text-align: center;
	margin-bottom: 40px;
	color:#2d5986;
	font-family: sans-serif;

}

</style>
<br><br>
<h2 >Item Administration</h2><br>
	<div class="container" id="customers" >

	
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for ID" title="Type in a name">
<br><br>
<table  class="table " id="myTable">

	<thead>
		<tr>
		<th>Item Code</th>
		<th>Name</th>
		<th>Image</th>
    <th> Price (per 250g)</th>
		<th> Quantity</th>
    
		<th> Operation</th>
		
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['code']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['image']; ?></td>
          <td><?php echo $row['price']; ?></td>
					<td><?php echo $row['qt']; ?></td>
          
					<td><a  class="button button1" href="updateitem.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
					<a onclick="return confirm('Are you sure you want to delete this entry?')" class="button button2" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
					</tr>

					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	
	</div>

	<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>