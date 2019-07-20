<?php
session_start();
include('db.php');
include('header.php');
$oid = $_POST['oid_in'];
$query = "SELECT * FROM Users WHERE UserID = $oid";
$result = mysqli_query($con, $query);
$rows = mysqli_fetch_assoc($result);
$dname = $rows['display_name'];
$gender = $rows['gENDer'];
$email = $rows['email'];
$age = $rows['age'];
$country = $rows['country']
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
            <header><?php echo $dname; ?></header>
        
            <h4> Gender: <?php echo $gender; ?> </h4>
            <h4> Email: <?php echo $email; ?> </h4>
            <h4> Country: <?php echo $country; ?></h4>
            <h4> Age: <?php echo $age; ?> </h4>
                    
        </center>

        <div>
        <center>
		<div class="container row">
			<h3> Reviews: </h3>
			<?php
			$pq = "SELECT * from caretakerreviews where cid = $oid";
			$pqcont = mysqli_query($con,$pq);
			while($prow = mysqli_fetch_assoc($pqcont)){ ?>
				
				<h3> <?php echo($prow['review']) ?></h3>
			<?php } ?>
        </div>
        </center>
	</div>
        </div>
    </body>
</html>  