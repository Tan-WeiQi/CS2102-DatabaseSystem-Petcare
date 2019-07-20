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
        <title> Update Profile </title>
        <link rel="stylesheet" type="text/css" href="css/updateprofile.css">
    </head>
    
    <body>
		<center>
		<div class="profile">
			<h3><header>Update Profile</header></h3>
			<div class="container">
				<form role="form" action="Updateprofile1.php" method="POST">
					<h4>
						<div class =" form-group ">
							<label for=" inputEmail ">Email:</ label >
							<input type ="email" class =" form-control " id=" inputEmail " name="email">
						</div >
						<div class="form-group">
							<label for="inputPhone">Phone Number:</label> 
							<input type="text" class="form-control" id="inputPhone" name="phone">
						</div>
						<div class="form-group">
							<label for="inputAddress">Address:</label> 
							<input type="text" class="form-control" id="inputAddress" name="address">
						</div>
						<div class="form-group">
							<label for="inputCountry">Country:</label> 
							<input type="text" class="form-control" id="inputCountry" name="country">
						</div>
					</h4>
					<h2>
						<div class="clearfix">
							<button type="next" class="btn">Update Profile</button> <!-- add js-->
						</div>
					</h2>
				</form>
			</div>
		<center>
    </body>
</html>   
    