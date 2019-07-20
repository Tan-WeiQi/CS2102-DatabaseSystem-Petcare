<?php
	session_start();
	include 'db.php';
	
	$currentid = $_SESSION['id'];
	$email =$_POST['email'];
	$phone =$_POST['phone'];
	$address =$_POST['address'];
	$country =$_POST['country'];
	
	if($email == ""){
		echo"<script>alert('Email cannot be empty')</script>";
		header("refresh:1; url=Updateprofile.php");
	}
	elseif($phone == ""){
		echo"<script>alert('Password cannot be empty')</script>";
		header("refresh:1; url=Updateprofile.php");
	}
	elseif($address == ""){
		echo"<script>alert('Address cannot be empty')</script>";
		header("refresh:1; url=Updateprofile.php");
	}
	else{
		$query = "UPDATE users SET email = '$email', phone_number = '$phone', address = '$address', country = '$country'
				WHERE UserID = $currentid";
		mysqli_query($con, $query);
		if(!mysqli_query($con, $query)){
			echo 'Not Updatded';
		}
		else{	
		echo 'Prolfile Updated';
		header("refresh:1; url=myprofile.php");
		}
	}
?>