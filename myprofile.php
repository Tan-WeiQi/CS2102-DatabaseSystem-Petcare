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
        <title> Profile </title>
        <link rel="stylesheet" type="text/css" href="css/profile.css">
    </head>
    
    <body>
	<div class="box">
        <center>
            <header><?php echo $rows['display_name']; ?>'s Profile</header>
        
		     
        
			<h4> First name: <?php echo $rows['first_name'];  ?> </h4>
			<h4> Last Name: <?php echo $rows['last_name'];  ?>  </h4>
            <h4> Gender: <?php echo $rows['gENDer']; ?> </h4>
			<h4> Phone Number: <?php echo $rows['phone_number'];  ?> </h4>
            <h4> Email: <?php echo $rows['email']; ?> </h4>
            <h4> Country: <?php echo $rows['country']; ?></h4>
			<h4> Address: <?php echo $rows['address'];  ?> </h4>
            <h4> Age: <?php echo $rows['age']; ?> </h4>
        
            <div class="clearfix">
				<a href=Updateprofile.php><button type="next" class="Addpetbtn">Update Profile</button></a>
				<a href=Updatepassword.php><button type="next" class="Addpetbtn">Change Password</button></a>
            </div>
        </center>
	</div>
    </body>
</html>    