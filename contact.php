<?php 
include "config.php";
include "head.php";
// include "footer.html"


$connect = mysqli_connect("localhost", "root", "", "vegetable");

	if (isset($_POST['submit'])) {
		// get variables from the form
    $fname_ = $_POST['fname'];
		$lname_ = $_POST['lname'];
		$email_ = $_POST['email'];
		$subject_ = $_POST['subject'];
    $message_ = $_POST['message'];
    

		//write sql query

		
    $sql = "INSERT INTO `contact`(`fname`, `lname`, `email`, `subject`,`message`) VALUES ('$fname_','$lname_','$email_','$subject_','$message_')";
		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
      
      echo '<script>alert("Message  successfuly sent")</script>';
			echo '<script>window.location="contact.php"</script>';
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}


  ?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet"> -->
	<link rel="stylesheet" href="css/about_style/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<style>
         body{background: whitesmoke;
            margin-top: 100px;
        } 
            </style>
	<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-push-8 animate-box">
					<br><br>
					<br><br>

						<h2>Contact Information</h2>
						<div class="row">
							<div class="col-md-12">
								<div class="contact-info-wrap-flex" >
									<div class="con-info" style="width: 100%; background: #fff; padding: 1.5em;background: white; margin-bottom: 30px;">
										<p><span><i class="material-icons">place</i></span> 198 Main Street, <br> Park Avenue Colombo 08</p>
									</div>
									<div class="con-info">
										<p><span><i class="material-icons">call</i></span> <a >+ 01135 2355 98</a></p>
									</div>
									<div class="con-info">
										<p><span><i class="material-icons">email</i></span> <a >info@yoursite.com</a></p>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-8 col-md-pull-4 animate-box">
					<br><br>
					<br><br>

						<h2>Get In Touch</h2>
				
							<div class="row form-group">
								<div class="col-md-6">
									<!-- <label for="fname">First Name</label> -->
									<form  action="" method="POST" >
									<input type="text" id="fname" name="fname" class="form-control" placeholder="Your firstname"  required>
								</div>
								<div class="col-md-6">
									<!-- <label for="lname">Last Name</label> -->
									<input type="text" id="lname"  name="lname" class="form-control" placeholder="Your lastname"  required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="email">Email</label> -->
									<input type="email" id="email"  name="email" class="form-control" placeholder="Your email address"  required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="subject">Subject</label> -->
									<input type="text" id="subject"   name="subject" class="form-control" placeholder="Your subject of this message"  required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="message">Message</label> -->
									<textarea name="message" id="message"    cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit"  name="submit" value="Send Message" class="btn btn-primary">
								</form>
							</div>
						</form>		
					</div>
				</div>
			</div>
		</div>

		

	
		<p><iframe style="   width: 1518px;height: 380px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11869.033445706526!2d79.86709831312248!3d6.912757075491663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259a291b991db%3A0xe37fc789128a67fc!2sColombo%2008%2C%20Colombo!5e0!3m2!1sen!2slk!4v1606711375395!5m2!1sen!2slk" 
		width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
	<?php	
		include "footer.php";

	?>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- YTPlayer -->
	<script src="js/jquery.mb.YTPlayer.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
    <script src="js/main.js"></script>
    
<!-- map  -->

    <script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script> -->

	</body>
	
</html>

