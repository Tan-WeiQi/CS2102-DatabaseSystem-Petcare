<?php
	session_start();
	include 'db.php';
	
	$email =$_POST['inputEmail'];
	$pwd =$_POST['inputPassword'];
	$sql = " SELECT * From Users WHERE email = '$email' AND password = '$pwd'";
	$results = mysqli_query($con,$sql);
	//$row=mysqli_fetch_assoc($results);
	if(!$row=mysqli_fetch_assoc($results)){
		echo"<script>alert('Wrong Email or Password. Please try again.')</script>";
		header("refresh:1; url=login.php");
		exit;
	}
	else{
		$_SESSION['id']=$row['UserID'];
		$_SESSION['email']=$row['email'];
		$hi = $_SESSION['id'];
		$q="SELECT * From Owner WHERE oid =$hi";
		$r=mysqli_query($con,$q);
		if(mysqli_num_rows($r) > 0 ){
			$_SESSION['type']='Owner';
			echo 'Owner Succesful Login';
			header("refresh:1; url=home.php");
		}
		else{
			$_SESSION['type']='Caretaker';
			echo 'CareTaker Succesful Login';
			header("refresh:1; url=home.php");
		}
	}
	
?>