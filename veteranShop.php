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
							<a href="veteranShop.php"><img src="images/home/logo.jpg" alt="" height="100" width="120"/></a>
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

	<section id="advertisement">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="" />
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->




							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="AddProduct.php">Add a new Product</a></h4>

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
						<h2 class="title text-center">Your Items</h2>
            <?php
              //open connection to mysql db

              $connection = mysqli_connect("localhost","root","root","veterans1") or die("Error " . mysqli_error($connection));
              $sql="SELECT COUNT(*) as count FROM PRODUCT_TBL a JOIN USER b ON a.uploadedByUserId=b.userId where email='".$_SESSION['login_user']."'";
              $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
              $noOfItems;
              while($row =mysqli_fetch_assoc($result)){
                $noOfItems=$row['count'];
              }

              $noOfItemsPerPage=12;
              $totalPages=ceil($noOfItems/$noOfItemsPerPage);
              //echo "<script>alert('Total number of pages:'+$totalPages)</script>";
              // Check that the page number is set.
              if(!isset($_GET['page'])){
                $_GET['page'] = 0;
              }else{
                // Convert the page number to an integer
                $_GET['page'] = (int)$_GET['page'];
              }

              // If the page number is less than 1, make it 1.
              if($_GET['page'] < 1){
                $_GET['page'] = 1;
                // Check that the page is below the last page
              }else if($_GET['page'] > $totalPages){
                $_GET['page'] = $totalPages;
              }

              foreach(range(1, $totalPages) as $page){

                if($page == 1 || $page == $totalPages || ($page >= $_GET['page'] - 2 && $page <= $_GET['page'] + 2)){
                  //echo '<a href="?page=' . $page . '">' . $page . '</a>';
                }
              }
              // Calculate the starting number
              $startProduct = ($_GET['page'] - 1) * $noOfItemsPerPage;
              //a JOIN USER b ON a.uploadedByUserId=b.userId where email='".$_SESSION['login_user']."'"
              // SQL Query
              $sql = 'SELECT * FROM PRODUCT_TBL a JOIN USER b ON a.uploadedByUserId=b.userId where email="'.$_SESSION['login_user'].'" LIMIT ' . $startProduct . ', ' . $noOfItemsPerPage;
              $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
              while($row =mysqli_fetch_assoc($result))
              {
                echo "<div class='col-sm-4'>
                  <div class='product-image-wrapper'>
                    <div class='single-products'>
                      <div class='productinfo text-center'>
                        <img src='".$row['imagePath']."' alt=''  height='220px' width='100px'/>
                        <h2>$".$row['price']."</h2>
                        <p>".$row['productName']."</p>

                      </div>

                    </div>
                    <div class='choose'>
                      <ul class='nav nav-pills nav-justified'>
                        <li><a href=''><i class='fa fa-plus-square'></i>Add to wishlist</a></li>
                        <li><a href=''><i class='fa fa-plus-square'></i>Add to compare</a></li>
                      </ul>
                    </div>
                  </div>
                </div>";
              }

            ?>



						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
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



    /*$('.add-to-cart').parent().find('h2');
    .quantity .productId*/
    </script>
</body>
</html>
