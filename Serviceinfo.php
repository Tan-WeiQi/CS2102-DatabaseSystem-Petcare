<?php
session_start();
include('db.php');
include('header.php');
$current = $_SESSION['id'];
$sid = $_POST['sid_in'];
$_SESSION['sid']=$sid;
$query = "SELECT * FROM Service WHERE sid = $sid";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$minbid = $row['minbid'];
$service = $row['stype'];
$ptype = $row['ptype'];
$fromdate = $row['fromdate'];
$todate = $row['todate'];
$cid = $row['cid'];
$q= "SELECT display_name FROM Users WHERE UserID = $cid";
$sql = mysqli_query($con,$q);
$ctname = mysqli_fetch_assoc($sql)['display_name'];
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Services </title>
        <link rel="stylesheet" type="text/css" href="css/petinfo.css">
    </head>
    
    <body>
    <center>

        <header>Services</header>
        <div class="container row" >
            
            <h2> Service Name: <?php echo($service) ?> <!-- input php--> </h2>
            <h2> CareTaker Name: <?php echo($ctname) ?> <!-- input php--> </h2>
            <h2> Period: <?php echo($fromdate) ?> to <?php echo($todate) ?> </h2>
            <h2> Pet Type Accepted: <?php echo($ptype) ?></h2>
            <h2> Current bid: <?php echo($minbid) ?></h2>

            <form class="owner-form" action="profileothers.php" method ="POST">
            <button  name="oid_in" Value = <?php echo $cid ; ?> style="border: Black; background: white;"><h5> See Provider</h5> </button>
            </form>
            <?php if($_SESSION['type']=='Owner') { ?>
                <form action="bid.php" method="POST">
                <input type="text" name="bid" placeholder="your bid here">
                <input type="text" name="pet_name" placeholder="pet which you wish to register for service">  
                <button type="submit" name="submitsearch">Bid</button>
                </form>
            <?php } ?>

            

        
        <p> </p>

    </center>    
    </body>
</html>