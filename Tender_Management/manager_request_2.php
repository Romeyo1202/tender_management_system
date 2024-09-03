<?php
include("dbconnect.php");
session_start();
extract($_POST);
 $cid=$_REQUEST['id'];
 $tid=$_REQUEST['tid'];
  // $qrty=mysql_query("update contract_apply set status='1' where id='$cid'");
  // $qrty=mysql_query("update contract set status='2' where id='$tid'");
// //header("location:manager_accept.php");
 
 
 
 $a=readfile("Amazon/1_$cid.txt");
 $b=readfile("google/2_$cid.txt");
 $c=readfile("Salesforce/3_$cid.txt");
 if(($a==$b)&&($b==$c))
 {
  $qrty=mysql_query("update contract_apply set status='1' where id='$cid'");
    $qrty=mysql_query("update contract set status='2' where id='$tid'");
//header("location:manager_accept.php");
?>
<script language="javascript">
					alert("Tender Completed");
					window.location.href="manager_accept.php";
					</script>
<?php
 }
 else
 {
?>					
					<script language="javascript">
					alert("Data Modified");
					window.location.href="manager_accept.php";
					</script>
					<?php
 }
?>
