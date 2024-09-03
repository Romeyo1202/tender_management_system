<?php
include("dbconnect.php");
session_start();
extract($_POST);
$a=$_REQUEST['id'];
  $qrty=mysql_query("update contract set status='1' where id='$a'");
header("location:manager_new_contact.php");

?>