<?php 
	session_start();
	include 'db.php';
	$current = $_SESSION['id'];
	$petname = $_POST['petname'];
	$type = $_POST['type'];
	
	$sql = "INSERT INTO pets (pet_name, pet_type, oid)
					VALUES ( '$petname', '$type', '$current')";	
					
	if(!mysqli_query($con, $sql)){
		echo 'Not Inserted';
		}
	else{	
		echo 'New Pet Registered';
		header("refresh:1; url=pets.php");
		}
	?>