
<?php
	session_start();
	include 'db.php';

	$em = $_SESSION['email'];

	$sql1 = "SELECT UserID FROM users WHERE email='$em'";
	$result = mysqli_query($con,$sql1);
	$row = mysqli_fetch_assoc($result);
	$id = $row["UserID"];
	
	if($_POST['radio'] == "Owner"){
		$sql = "INSERT INTO Owner (oid) VALUES ('$id')";
		
		if(!mysqli_query($con, $sql))
		{
			echo 'Not Inserted';
			}
	
		else
		{	
			echo "Registered as Owner";
			session_destroy();
			header("refresh:2; url=login.php");
			}
		
	}
	elseif($_POST['radio'] == "CareTaker"){
		$sql = "INSERT INTO CareTaker (cid) VALUES ('$id')";
		
		if(!mysqli_query($con, $sql))
		{
			echo 'Not Inserted';
			}
	
		else
		{	
			echo "Registered as CareTaker";
			session_destroy();
			header("refresh:2; url=login.php");
			}
		
	}
	else echo "stupid do wrong la still don't know why";

?>