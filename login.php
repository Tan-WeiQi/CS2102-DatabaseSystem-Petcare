<? php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PAWsome PetCare's Log-in Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="login2.php" method ="POST">
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
				
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="TYPE Email">
						<input class="input100" type="text" name="inputEmail" placeholder="Email">
						<span class="focus-input100"></span> 	
					</div>

					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="inputPassword" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn"> 
                       <!-- <label class = "checkboxes"><INPUT TYPE="radio" Name="inputType" Value ="Owners"> Signed up as: </INPUT>
						<input type="text" name="userrole" placeholder="'Owner' or 'Caretaker'"><br>
                        </label>  insert js + sql -->
						
						<button class="login100-form-btn">
							Sign in
						</button> 
					</div>
					<div class="w-full text-center">
						<a href="signup1.php" class="txt3">
							Sign Up
						</a>
					</div> <!-- insert js -->
				</form>

				<div class="login100-more" style="background-image: url(images/happy-dog-owner.jpg);"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<html>