<?php
	session_start();
    include 'db.php';
    
    $cid = $_SESSION['id'];
    #$pettype =$_POST["ptype_in"];
    $startdate =$_POST['startdate_in'];
    $enddate =$_POST["enddate_in"];
	$minbid =$_POST['Min_bid_in'];
    $servicetype= $_POST['stype_in'];
	$type = $_POST['type'];
    $sql = "INSERT INTO service (cid, ptype, stype, fromdate, todate, minbid, availability, completed)  
		VALUES ('$cid','$type', '$servicetype', '$startdate', '$enddate', '$minbid', true, false ) ";	
   
	if(!mysqli_query($con, $sql))
		{
			echo 'Not Inserted';
			}
	
		else
		{	
            echo 'New Service Created';
            header('refresh:1; url=Services.php');
        }
?>