<?php
include("dbconnect.php");
session_start();
extract($_POST);
if(isset($_POST['Submit']))
{
echo  $qry=mysql_query("select * from manager_details where username='$uname' and  password='$pass'");
$num=mysql_num_rows($qry);
	if($num==1)
	{
	$_SESSION['uname']=$uname;
	?>					
					<script language="javascript">
					alert("Login Successfully");
					window.location.href="manager_home.php";
					</script>
					<?php
	}
else
	{
	?>					
					<script language="javascript">
					alert("Failed");
					window.location.href="manager.php";
					</script>
					<?php
	}

}
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Tender Management</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
                <style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
        </style>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><span class="style1">SMART TENDER SYSTEM</span></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
					<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="manager.php">Manager</a></li> 
								<li class="nav-item"><a class="nav-link" href="contractor.php">Contractor</a>
								<li class="nav-item"><a class="nav-link" href="government.php">Government</a>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Manager</h2>
						<div class="page_link">
							<a href="index.php">Home</a>
							<a href="manager.php">Manager</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area pad_top">
        	 
        		<div class="main_title">
        			<h2>Manager Login</h2>
        			<form name="form1" method="post" action="">
        			  <table width="352" height="178" border="0" align="center">
                        <tr>
                          <td>Username</td>
                          <td><label>
                            <input name="uname" type="text" id="uname" required="">
                          </label></td>
                        </tr>
                        <tr>
                          <td>Password</td>
                          <td><label>
                          <input name="pass" type="password" id="pass" required="">
                          </label></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><label>
                            <input type="submit" name="Submit" value="Submit">
                          </label></td>
                        </tr>
                      </table>
                  </form>
        			 
        		</div>
       		 
         
        </section>
        <!--================End Feature Area =================-->
        
        <!--================Post Slider Area =================--><!--================End Post Slider Area =================-->
        
        <!--================Clients Logo Area =================--><!--================End Clients Logo Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
       		  <div class="row footer_inner"></div>
        		<div class="copy_right_text">
        			<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with  by Admin
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>