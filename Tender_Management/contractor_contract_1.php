<?php
include("dbconnect.php");
session_start();
extract($_POST);
 $a=$_REQUEST['id'];
 $contractor=$_SESSION['contractor']
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
        <style type="text/css">
<!--
.style1 {color: #004080}
-->
        </style>
</head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="#"><span class="style1">SMART TENDER SYSTEM</span></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
					<li class="nav-item active"><a class="nav-link" href="contractor_home.php">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="contractor_contract.php">New contract</a></li> 
								<li class="nav-item"><a class="nav-link" href="contractor_status.php">Status</a>
							 
								<li class="nav-item"><a class="nav-link" href="contractor.php">Logout</a>
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
						<h2>Contractor</h2>
						<div class="page_link">
							<a href="contractor_home.php">Home</a>
							<a href="#">Contractor</a>						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area pad_top">
        	 
        		<div class="main_title">
        			<h2>New Contract details </h2>
        			<form action="" method="post" enctype="multipart/form-data" name="form1">
        			   
     <?php
	 $ctype="";
	 $budget="";
	 $materials="";
	 $time="";
	 $delivery="";
	 $workduration="";
	 $prequalification="";
	 $location="";
	 $qt=mysql_query("select * from contract  where status='1'");
	 while($r=mysql_fetch_array($qt))
	 {
	   
	 $ctype=$r['ctype']; 
	 $budget=$r['budget']; 
	 $materials=$r['material']; ;
	 $time=$r['time']; 
	 $delivery=$r['delivery']; 
	 $workduration=$r['workduration']; 
	 $prequalification=$r['prequalification']; 
	 $location=$r['location']; ; 
	 }
	?>
                      </table>
        			  <table width="523" height="415" border="0" align="center">
                        <tr>
                          <td width="204"><h4 align="left"><span class="style1">Contract Type </span></h4></td>
                          <td width="193"><div align="left"><?php echo $ctype;?></div></td>
                        </tr>
                        <tr>
                          <td><h4 align="left"><span class="style1">Budget</span></h4></td>
                          <td><div align="left"><?php echo $budget;?></div></td>
                        </tr>
                        <tr>
                          <td><h4 align="left"><span class="style1">Matrials </span></h4></td>
                          <td><div align="left"><?php echo $materials;?></div></td>
                        </tr>
                        <tr>
                          <td><h4 align="left"><span class="style1">Time</span></h4></td>
                          <td><div align="left"><?php echo $time;?></div></td>
                        </tr>
                        <tr>
                          <td><h4 align="left"><span class="style1">Delivery</span></h4></td>
                          <td><div align="left"><?php echo $delivery;?></div></td>
                        </tr>
                        <tr>
                          <td><h4 align="left"><span class="style1">Work duration </span></h4></td>
                          <td><div align="left"><?php echo $workduration;?></div></td>
                        </tr>
                        <tr>
                          <td><h4 align="left"><span class="style1">pre Qualification </span></h4></td>
                          <td><div align="left"><?php echo $prequalification;?></div></td>
                        </tr>
                        <tr>
                          <td><h4 align="left"><span class="style1">Location</span></h4></td>
                          <td><div align="left"><?php echo $location;?></div></td>
                        </tr>
                        <tr>
                          <td><h4 align="left"><span class="style1">Amount</span></h4></td>
                          <td><div align="left">
                            <label>
                            <input type="number" name="textfield" required="">
                            </label>
                          </div></td>
                        </tr>
                        <tr>
                          <td><h4 align="left"><span class="style1">Quotation</span></h4></td>
                          <td><label>
                            
                          <div align="left">
                            <input type="file" name="file">
                            </div>
                          </label></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><div align="left">
                            <label>
                            <input name="btn" type="submit" id="btn" value="Submit">
                            </label>
                          </div></td>
                        </tr>
                      </table>
        			  <p>&nbsp;</p>
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
<?php

if(isset($_POST['btn']))
{
	$fname = $_FILES['file']['name'];
    $file_tmp =$_FILES['file']['tmp_name'];
  //  move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$fname);
$uploadDirectory = "file/"; //folder to save the encrypted file 
$fileName = $_FILES['file']['name'];
$fname=$id.$_FILES['file']['name'];
$tempFileName = $_FILES['file']['tmp_name'];
$error = $_FILES['file']['error']; 
$fileContentType = $_FILES['file']['type']; 
$fileSize = $_FILES['file']['size'];
if($error==UPLOAD_ERR_OK){
$file = fopen($tempFileName,"r"); 
$content = fread($file,filesize($tempFileName));
$encryptedContent = base64_encode($content);
$encryptedFileSaveName=$uploadDirectory.$fileName;
$encryptedFile = fopen($encryptedFileSaveName,'w');

fwrite($encryptedFile,$encryptedContent);
fclose($encryptedFile);
//print("File has been upload and encrypted successfully.");
}
 move_uploaded_file( $_FILES['file']['tmp_name'],"upload/".$fname);
if(is_dir("Amazon")==false)
			{
			mkdir("Amazon");
			}
if(is_dir("google")==false)
			{
			mkdir("google");
			}
if(is_dir("Salesforce")==false)
			{
			mkdir("Salesforce");
			}
$i = 1;
$max_qry = mysql_query("select max(id) from contract_apply");
	$max_row = mysql_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
$filename = $encryptedFileSaveName;
$fsi=filesize($filename) . ' bytes';
 copy($filename, 'Amazon/1_'.$id.'.txt');
 copy($filename, 'google/2_'.$id.'.txt');
 copy($filename, 'Salesforce/3_'.$id.'.txt');
/*
while(! feof($fp)) {
    $contents = fread($fp,1);
    file_put_contents('Amazon/new_file_'.$i.'.txt',$contents);
    $i++;
}
*/ 

 

$qry=mysql_query("insert into contract_apply values('$id','$contractor','$a','$fname','$textfield','$ctype','0','0')");
if($qry)
{
 	?>					
					<script language="javascript">
					alert("Success");
					window.location.href="contractor_status.php";
					</script>
					<?php
}
 
}

?>