<?php
include('db.php');
?>

	<div class="topnav">
		
		<!-- Home Button-->
		<a style="float:left" href="home.php">Home</a> 
		
		<!--My Profile Button-->
		<a style="float:left" href="myprofile.php">Profile</a> 
		
		<!-- Either Services or Pets Button-->
		<?php if($_SESSION['type'] == "Caretaker"){ ?>
		
		<a style="float:left" href="Services.php">Services</a> 
			
		<?php }
			else{ ?>
			
		<a style="float:left" href="Pets.php">Pets</a> 
		<?php } ?>
		
		<!-- History Button-->
		<a style="float:left" href="History.php">History</a>
		
		<!-- Search Button -->

		<div style="float:left">
		<form action="search.php" method="POST">
		<input type="text" name="search" placeholder="search..">
		<button type="submit" name="submitsearch">Search</button>
		</form>
		</div>
		

		 <!-- Log Out Button-->
        <a style="float:right" href="log_out.php"> LogOut</a>
		
	</div>  