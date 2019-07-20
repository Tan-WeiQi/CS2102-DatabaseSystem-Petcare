<?php 
session_start();
include('db.php');
include('header.php');
$cid = $_SESSION['id'];
$query = "SELECT * FROM Users WHERE UserID = $cid";
$result = mysqli_query($con, $query);
$rows = mysqli_fetch_assoc($result)
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Change Password </title>
        <link rel="stylesheet" type="text/css" href="css/updatepassword.css">
    </head>
    
    <body>
		<center>
		<div class="box">
			<h3><header>Change Password</header></h3>
			<div class="container">
				<form role="form" action="Updatepassword1.php" method="POST">
					<h3>
						<!-- Text field -->
						<div class =" form-group ">
							<label for=" inputOPassword ">Old Password:</ label > <!-- input php-->
							<input type ="password" class =" form-control " id=" inputOPassword " name="oldpassword">
						</div >
						<div class =" form-group ">
							<label for=" inputNPassword ">New Password:</ label > <!-- input php-->
							<input type ="password" class =" form-control " id=" inputNPassword " name="newpassword">
						</div >
						<div class =" form-group ">
							<label for=" reenterNPassword ">Re-enter New Password:</ label > <!-- input php-->
							<input type ="password" class =" form-control " id=" reenterNPassword " name="confirmnewpassword">
						</div >
					</h3>
					<h2>
						<div class="clearfix">
							<button type="next" class="btn">Change Password</button> <!-- add js-->
						</div >
					</h2>
				</form>
			</div>
		</div>
		</center>
    </body>
</html>