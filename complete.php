<?php
session_start();
include 'db.php';
$sid =$_POST['sid_in'];
$u = "SELECT * FROM SERVICE where sid = $sid";
$row = mysqli_fetch_assoc(mysqli_query($con,$u));
$check = $row['completed'];
if($check == true){ echo("you have already completed this service");}
else{
	$cid = $row['cid'];
	$pid = $row['pid'];
	$name = $row['stype'];
	echo($name);
	echo($pid);
	echo($cid);
	echo($sid);
	$sql = "INSERT INTO history (cid,sid,pid,name) VALUES ('$cid', '$sid','$pid','$name')";
	$hihi = mysqli_query($con, $sql);
	$q= "UPDATE Service Set completed = true, availability = false where sid = $sid";
	$hi = mysqli_query($con,$q);}
header('refresh:1; url=home.php')
?>