<?php
	session_start();
	include 'db.php';
	
	$currentid = $_SESSION['id'];
	$oldpassword =$_POST['oldpassword'];
	$newpassword =$_POST['newpassword'];
	$confirmnewpassword =$_POST['confirmnewpassword'];
	$sql = " SELECT * From Users WHERE UserID = '$currentid' AND password = '$oldpassword'";
	$results = mysqli_query($con,$sql);
	//$row=mysqli_fetch_assoc($results);
	if(!$row=mysqli_fetch_assoc($results)){
		echo"<script>alert('Current Password entered is wrong!')</script>";
		header("refresh:1; url=Updatepassword.php");
		exit;
	}
	else{
		if($newpassword != $confirmnewpassword){
		echo"<script>alert('New Password and Re-enter New Password do not match!')</script>";
		header("refresh:1; url=Updatepassword.php");
		}
		elseif($newpassword == $oldpassword){
		echo"<script>alert('New Password and Current Password must be different!')</script>";
		header("refresh:1; url=Updatepassword.php");
		}
		else{
			$query = "UPDATE users SET password = '$newpassword' where UserID = $currentid";
			mysqli_query($con, $query);
			echo 'Password Changed';
			header("refresh:1; url=myprofile.php");
		}
	}
?>