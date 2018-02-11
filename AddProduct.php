<?php

   session_start();
   if(!isset($_SESSION['login_user'])){

     echo "<script> var sessionSet=0;
     </script>";
   }
   else{
      echo "<script> var sessionSet=1;
      </script>";

   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MST | For Veterans</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6 ">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +1 573 202 1657</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> info@buyfromveterans.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.jpg" alt="" height="100" width="120"/></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><button id="loginLink" class="btn btn-default"> Login</button></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php">Home</a></li>
								<li class="dropdown"><a href="#" class="active">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.php" class="active">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li>



                                    </ul>
                                </li>


								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
				</div>
			</div>
	</header>


	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Add a new Product</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="veteranShop.php">Show Added Products</a></h4>
								</div>
							</div>

						</div><!--/category-productsr-->


					</div>
				</div>

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Add a new Product</h2>
            <div class="signup-form"><!--sign up form-->

  <form>
  							<input type="text" placeholder="Product Name" name="name" id="productName"/>
  							<input type="text" placeholder="Price" name="price" id="price"/>

                <select id="category">
  <?php
    //open connection to mysql db

    $connection = mysqli_connect("localhost","root","root","veterans1") or die("Error " . mysqli_error($connection));

    $sql = "select * from CATEGORY";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
    while($row =mysqli_fetch_assoc($result))
    {
      echo "<option value=".$row['categoryId'].">".$row['categoryName']."</option>";
      //echo "<script>console.log( 'Debug Objects: " . $row['categoryName'] . "' );</script>";
    }

?>
</select><br><br>
</form>
<form enctype="multipart/form-data">
 <!--action="uploadFile.php" method="post"  enctype="multipart/form-data"-->
                <input type="file" name="file" id="fileToUpload">

              <!--  <input type="submit" class="btn btn-default">-->
  							<button  class="btn btn-default" id="sell">Sell Product</button>
  </form>
  					</div><!--/sign up form-->

					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>

	<footer id="footer"><!--Footer-->
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-2">
            <div class="companyinfo">
              <h2><span>MST</span> for Veterans</h2>
              <p>MST for Veterans is committed to bring all the veteran owned businesses on the online market</p>
            </div>
          </div>

          <div class="col-sm-3 pull-right">
            <div class="address">
              <img src="images/home/map.png" alt="" />
              <p>1509 N Bishop Avenue, Rolla, MO, USA, 65401</p>
            </div>
          </div>
        </div>
      </div>
    </div>

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>quick Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Gift Cards</a></li>
								<li><a href="">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-Shopper. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.mst.edu">MST Shamhacks</a></span></p>
				</div>
			</div>
		</div>

	</footer><!--/Footer-->



    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script src="js/changeLoginText.js"></script>

    <script>

    changeLoginText(sessionSet);


$("#loginLink").click(function(){
  //Clicked on logging out..
  //alert("This should redirect to Logout.php but value of sessionset is:"+sessionSet);
  if(  $("#loginLink").text()=="Logout" && sessionSet==1){
    //alert("This should redirect to Logout.php");
    window.location.replace("Logout.php");
  }
  else {
    window.location.replace("login.php");
  }
});

      $('#sell').click(function(){

        $.post("AddProductBG.php",
                              {
                                productName:$("#productName").val(),
                                price:$("#price").val(),
                                category:$("#category").val()
                              },
                              function(data,status){
                                if(data=="success"){}
                              });

        var form = $('form')[1];
        var formData = new FormData(form);

        $.ajax({
    url: 'uploadFile.php',
    data: formData,
    type: 'POST',
    contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
    processData: false, // NEEDED, DON'T OMIT THIS
    success: function(php_script_response){

    }
});


   });

        /*
        var file_data = $('#fileToUpload').prop('files')[0];
      var form_data = new FormData();
      form_data.append('file', file_data);

        $.ajax({
                           url: 'uploadFile.php', // point to server-side PHP script
                           dataType: 'text',  // what to expect back from the PHP script, if anything
                           cache: false,
                           contentType: false,
                           processData: false,
                           data: form_data,
                           type: 'post',
                           success: function(php_script_response){
                              alert(php_script_response);
                           }
                });

                });
                */

/*
    $('#sell').click(function(){
      alert("something");
      var file_data = $('#fileToUpload').prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);

$.ajax({
                         url: 'uploadFile.php', // point to server-side PHP script
                         dataType: 'text',  // what to expect back from the PHP script, if anything
                         cache: false,
                         contentType: false,
                         processData: false,
                         data: form_data,
                         type: 'post',
                         success: function(php_script_response){
                            alert(php_script_response);
                         }
              });
              */



    </script>
</body>
</html>
