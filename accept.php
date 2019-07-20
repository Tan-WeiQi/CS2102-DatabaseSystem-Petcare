<?php 
session_start();
include 'db.php';
$sid =$_POST['sid_in'];
$u = "SELECT * FROM SERVICE where sid = $sid";
$row = mysqli_fetch_assoc(mysqli_query($con,$u));
$cid = $row['cid'];
$pid = $row['pid'];
$ava = $row['availability'];
if(!$ava){
	echo"<script>alert('This service is unavailable')</script>";	
	header('refresh:1; url=services.php');
}
elseif(!$pid){
	echo"<script>alert('No pet registered')</script>";
	header('refresh:1; url=services.php');
}
else{
    $q= "UPDATE Service Set Availability = false where sid = $sid";
    $hi = mysqli_query($con,$q);
    header('refresh:1; url=home.php');
}
?>