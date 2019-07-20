<?php
session_start();
include('db.php');
include('header.php');   
$current= $_SESSION['id'];
$review =$_POST['review'];
$reviewee = $_POST['reviewee'];
$session_type=$_SESSION['type'];
if($session_type == 'Caretaker'){
	$q="INSERT INTO PETREVIEW (pid,cid, review) VALUES('$reviewee','$current','$review')";
	$query= mysqli_query($con,$q);
	header('refresh:1; url=home.php');
	
}
elseif($session_type == 'Owner'){
	$q="INSERT INTO CARETAKERREVIEWS (cid,rid, review) VALUES('$reviewee','$current','$review')";
	$query= mysqli_query($con,$q);
	header('refresh:1; url=home.php');
	
}
else{
	echo("WHO THE FUCK ARE YOU");}
?>