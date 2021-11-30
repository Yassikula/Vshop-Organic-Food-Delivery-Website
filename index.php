<?php 
// include "server.php";
// include "Login-registration/home.php";

// include "header.php";
include "head.php";
// include "footer.php"

$connect = mysqli_connect("localhost", "root", "", "vegetables");

?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html >
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="slider.css" rel="stylesheet">

<link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


    <link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<!-- <link rel="stylesheet" href="css/icomoon.css"> -->
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">



	<!-- Theme style  -->
	<link rel="stylesheet" href="css/about_style/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
  <!-- </head> -->
  <body>
      <style>

.footer {
   /* position: fixed; */
       margin-top: auto;
   left: 0;
   bottom: 0px;
   width: 100%;
   /* background-color: red; */
   color: white;
   text-align: center;
}
/* body{

	background: #cccccc38!important;
	margin-top: 154px;
} */
p{
    font-family: "Poppins", Arial, sans-serif;
    font-weight: 300;
    font-size: 16px;
	color: gray;
}

.news{

	top: -300px;
    /* left: 573px; */
    left: 503px;
    /* position: relative; */
}
.formemail{

	width: 271px;
	position: relative;

	left: 503px;
	top: -327px;


    padding: 14px;
}

.containert {
    width: 100%;
    padding-left: 147px;
    margin-top: 60px;
}

.btn {
  background: rgba(15, 86, 132, 1);
  border: none;
  color: white;
  padding: 11px 22px;
    font-size: 18px;
  cursor: pointer;
}

.btn:hover {
  /* background-color: RoyalBlue; */
}
body{

  
	min-height:100vh;

	background-color:  #eee !important;;
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
    font-weight: 600;
    font-size: 26px;
    text-transform: uppercase;

    position: relative;
  left: -55px;
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
	padding-top: 15px;
    padding-bottom: 13px;
}
}

}


</style>


<div  style="height: 500px; background-image: url(assets/img/portfolio/homeimg.jpg); 
 background-size:cover; background-position: center center;" data-section="home">

</div>


<!-- vege trend  -->


<div class="container"  >
			<br />
			<br />
			<br />
			
			<br /><br />

      <div class="row">
			<div class="col-sm">
            <a class="atext" style="	top: -79px;">FOR LESS THAN RS.100</a><br><br>
            <!-- <div class="d-flex"> -->
                <div class="card-deck" style="margin-right: -201px;display: inline-flex;  margin-left: -168px;">

			<?php
                $query = "SELECT * FROM tbl_product WHERE price  BETWEEN 10 AND 100  LIMIT 5 ";
              
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>

	 <!-- <div class="col-md-3"> -->
	 <form   method="post" action="vegetable.php?action=add&id=<?php echo $row["id"]; ?>"  >
  
   <div class="card" style="width:18rem; padding:20px;width: 240px;margin-bottom: 80px; margin-left:72px;margin-right: -55px;     margin-top: 170px; border: solid;border-width: thin;border-color: ghostwhite;; overflow: hidden;  position: relative;     " >

	   <div style="width: 310px;">
		   <img class="card-img-top" src="assets/img/portfolio/<?php echo $row["image"]; ?>"   />
<br>
		   <span class="span1" ><?php echo $row["name"]; ?></span><br>
		   <lable style="margin-left: 52px;  " >Per  250 g(s)</lable>
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

	   <button type="submit" name="add_to_cart"  class="fa fa-heart"  style=" border-radius: 30px; background: none; height: 28px;  font-size:17px; top: 4px; width: 30px;text-align: center; color:white; position: absolute; left: 144px;;border: none;" ></button>
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


<!-- bege trend end  -->

  <!-- slider -->
<div style="background-image: url(assets/img/portfolio/food.jpg); background-attachment: fixed; background-size: cover;">

<a class="atext" style=" left: 160px; color:white"> #NEW ARRIVALS</a>
  <div class="slider owl-carousel" id="slider"style=" margin-left: 226px;margin-top: -42px;">

<?php
                $query = "SELECT * FROM tbl_product ORDER BY id DESC LIMIT 6  ";
              $result = mysqli_query($connect, $query);
              if(mysqli_num_rows($result) >0)
              {
                  while($row = mysqli_fetch_array($result))
                  {
              ?>
    <div class="card" style ="margin-top: 216px;width: 300px;  ">
      <div class="img"><img class="card-img-top" style="padding: 20px;text-align: -webkit-right;" src="assets/img/portfolio/<?php echo $row["image"]; ?>"   /></div>
      <div class="content">
        <div class="title"> <?php echo $row["name"]; ?></div>
        <div class="sub-title" style="color:black"> LKR<?php echo $row["price"]; ?></div>
        <div class="btn">
        <input type="number" id="myNumber"name="quantity" value="1" class="qt" style="   height: 13px;text-align: center;font-size: 17px;" />
       <button type="submit" name="add_to_cart" style="   border: none;  color:white;
    background: none; width: 115px;height: 38px;font-weight: 400;font-size:28px;border-radius: 0px;"  class="fa fa-shopping-cart"  >  </button>
<div class= "heartbtn">

     <button type="submit" name="add_to_cart"  class="fa fa-heart"  style=" border-radius: 30px; background: none; height: 28px;  font-size:21px; 
        margin-left: 153px;color:white; position: absolute; top: 471px;border: none;" ></button>
	   </div>

          <!-- <button>Read more</button> -->

          
        </div>
      </div>
    </div>

    
    <?php  
    // break;
  }
                  } else {
                      echo "no products available";
                  }
                  ?>
  
  </div>
  </div> 


  <!-- slider end  -->
<!-- 1234567 -->
<br>

<a class="atext" style=" left: 160px;"> #NEW PRODUCTS</a>

			<?php
				$query = "SELECT * FROM tbl_product WHERE type= 'fruit' ORDER BY id ASC LIMIT 6";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>



<div class="containert">


<form   method="post"  action="index.php?action=add&id=<?php echo $row["id"]; ?>"  >

<div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card1" style= " background: white;">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" style="width: 233px; height: 218px;" src="assets/img/portfolio/<?php echo $row["image"]; ?>" alt="card image"></p>
                                        <h4 class="card-title"><?php echo $row["name"]; ?></h4>
                                        <h4 class="card-title">LKR.<?php echo $row["price"]; ?></h4>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card1" style= " background: white;">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title"><?php echo $row["name"]; ?></h4>
                                        <p class="card-text" style="width: 408px;height: 178px;">Details.</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                  </form>
                  
            </div>
        
                  <?php }
                    } else {
                        echo "no products available";
                    }
                    ?>


  </div>


 
 <!-- 2134 -->

 <div  class="footer">
<footer id="colorlib-footer" style="  position: absolute;margin-top: 587px;  width: 100%;">
			<div class="container" >
				<div class="row row-pb-md" style="    margin-top: -17px; margin-bottom: 33px;height: 294px">
					<div class="col-md-3 colorlib-widget">
						<h4>About Fresh Perk</h4>
						<p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
						<p>
						<ul class="colorlib-social-icons">
										<li><a style="color:white" href="#"><i class="fa fa-facebook-f"></i></a></li>
										<li><a style="color:white" href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a style="color:white" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a style="color:white" href="#"><i class="fa fa-whatsapp"></i></a></li>
									</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="index.php"><i class="icon-check"></i> Home</a></li>
								<li><a href="vegetable.php"><i class="icon-check"></i> Vegetable</a></li>
								<li><a href="fruit.php"><i class="icon-check"></i> Fruits</a></li>
								<li><a href="slick.php"><i class="icon-check"></i> Products</a></li>

								<li><a href="aboutus.php"><i class="icon-check"></i> About</a></li>
								<li><a href="contact.php"><i class="icon-check"></i> Contact</a></li>
								<!-- <li><a href="#"><i class="icon-check"></i> Privacy</a></li> -->
							</ul>
						</p>
					</div>

					

					<div class="col-md-3 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li> 198 Main Street, <br> Park Avenue Colombo 08</li>
							<li><a href="tel://1234567920"><i class="material-icons">call</i> + 01135 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com"><i class="material-icons">email</i> info@yoursite.com</a></li>
							<!-- <li><a href="#"><i class="icon-location4"></i> yourwebsite.com</a></li> -->
						</ul>
					</div>
				</div>
			</div>

			

			<!-- <div class="news"> -->
<!-- 			
				<h4 >New Letter</h4>
		<a>Sign up to our newsletter to get all </a><br>
		<a>the latest offers and promotions.</a> -->
		<!-- </div> -->
			<input type="text" name="email" placeholder="Your email" class="formemail" style=" width: 222px; height: 37px;">
			<button class="btn btn-primary" style="   border: none;
    border-radius: unset;  left: 503px;   position: relative;top: 526px;   width: 74px; top: -327px; background: rgba(181, 155, 110, 1);" data-loading-text="<span>Send</span>"><span>Send</span></button>
		<div>


 <script>
      $(".slider").owlCarousel({
        loop: true,
        // autoplay: true,
        autoplayTimeout: 2000, //2000ms = 2s;
        autoplayHoverPause: true,
      });
    </script>

<?php	
		// include "footer.php";

	?>
 
 <script>
      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000, //2000ms = 2s;
        autoplayHoverPause: true,
      });
    </script>

  </body>
</html>

