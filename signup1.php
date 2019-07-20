<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Sign Up </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
	<div class="signup">
        <header> Sign Up </header>
        <div class="container">

			<form role="form" action="signup11.php" method="POST">
            <!-- Text field -->
            <div class =" form-group ">
                <label for=" inputEmail ">Email</ label > <!-- add php-->
                <input type ="email" class =" form-control " name=" inputEmail">
            </div >
            <div class="form-group">
                <label for="inputName">Display Name</label> <!-- add php-->
                <input type="text" class="form-control" name="inputName">
            </div>
            <div class =" form-group ">
                <label for=" inputPassword ">Password</ label > <!-- add php-->
                <input type ="password" class =" form-control " name=" inputPassword">
            </div >
            <div class =" form-group ">
                <label for=" reenterPassword ">Re-enter Password</ label > <!-- add php-->
                <input type ="password" class =" form-control " name=" reenterPassword">
            </div >
            <div class="form-group">
                <label for="inputFName">First Name</label> <!-- add php-->
                <input type="text" class="form-control" name="inputFName">
            </div>
            <div class="form-group">
                <label for="inputLName">Last Name</label> <!-- add php-->
                <input type="text" class="form-control" name="inputLName">
            </div>
            <div class="form-group">
                <label for="inputPhone">Phone Number</label> <!-- add php-->
                <input type="text" class="form-control" name="inputPhone">
            </div>
            <div class="form-group">
                <label for="inputGender">Gender: </label> <!-- add php-->
                	<select type="list" name="inputGender">
						<option value="M" name="inputGender">M</option>
						<option value="F" name="inputGender">F</option>
					</select>
            </div>
			<br>
            <div class="form-group">
                <label for="inputAddress">Address</label> <!-- add php-->
                <input type="text" class="form-control" name="inputAddress">
            </div>
            <div class="form-group">
                <label for="inputCountry">Country</label> <!-- add php-->
                <input type="text" class="form-control" name="inputCountry">
            </div>
            <div class="form-group">
                <label for="inputAge">Age</label> <!-- add php-->
                <input type="text" class="form-control" name="inputAge">
            </div>
            
            <div class="clearfix">
                <button type="next" class="nextbtn">Next</button> <!-- add js-->
            </div>
			</form>
		</div>
   
        </div>
    </body>
</html>