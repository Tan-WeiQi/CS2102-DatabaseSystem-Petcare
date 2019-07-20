<?php 

	session_start();
	include 'db.php';

	$email = $_POST['inputEmail'];
	$user = $_POST['inputName'];
	$pwd = $_POST['inputPassword'];
	$confirm = $_POST['reenterPassword'];
	$Fname = $_POST['inputFName'];
	$Lname = $_POST['inputLName'];
	$phone = $_POST['inputPhone'];
	$gender = $_POST['inputGender'];
	$address = $_POST['inputAddress'];
	$country = $_POST['inputCountry'];
	$age = $_POST['inputAge'];
	
	$_SESSION['email'] = $email;
	
	$page = "";
	#$checkemail = mysqli_query($con, "SELECT email FROM users where email = $email");
	$state = "empty";
	$check = "SELECT email FROM users";
	#$checkemail = mysqli_query($con, $check);
	$checkRes = mysqli_query($con, $check);
	if(mysqli_num_rows($checkRes)>0){
		while($row = mysqli_fetch_assoc($checkRes)){
		if($row["email"] == $email){
		$state =  "exist";
			}
		}
	}
	;
	#$answer = "SELECT COUNT(*) FROM Users WHERE email = email_in"
	
	
	if($pwd != $confirm){
		echo"<script>alert('Password and Re-enter Password do not match')</script>";
		#$page = "signup1.php";
		header("refresh:1; url=signup1.php");
	}
	elseif($pwd == ""){
		echo"<script>alert('Password cannot be empty')</script>";
		header("refresh:1; url=signup1.php");
	}
	elseif($email == ""){
		echo"<script>alert('Email cannot be empty')</script>";
		header("refresh:1; url=signup1.php");
	}
	elseif($user == ""){
		echo"<script>alert('Display Name cannot be empty')</script>";
		header("refresh:1; url=signup1.php");
	}
	elseif($Fname == ""){
		echo"<script>alert('First Name cannot be empty')</script>";
		header("refresh:1; url=signup1.php");
	}
	elseif($Lname == ""){
		echo"<script>alert('Last Name cannot be empty')</script>";
		header("refresh:1; url=signup1.php");
	}
	elseif($phone == ""){
		echo"<script>alert('Password cannot be empty')</script>";
		header("refresh:1; url=signup1.php");
	}
	elseif($address == ""){
		echo"<script>alert('Address cannot be empty')</script>";
		header("refresh:1; url=signup1.php");
	}
	elseif($state == "exist"){
		echo"<script>alert('Email is already in use.')</script>";
		#$page = "signup1.php";
		header("refresh:1; url=signup1.php");
	}
	elseif($state == "empty"){
		$sql = "INSERT INTO users (display_name, password, first_name, last_name, email, gENDer, phone_number, address, country, age) 
						VALUES ( '$user', '$pwd', '$Fname', '$Lname', '$email', '$gender', '$phone', '$address', '$country', '$age')";

		if(!mysqli_query($con, $sql))
		{
			echo 'Not Inserted';
			}
	
		else
		{	
			echo 'Inserted';
			header("refresh:1; url=signup2.php");
			}
	
			
	}
	
	
	?>