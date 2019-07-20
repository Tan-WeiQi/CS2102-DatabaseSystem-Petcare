<?php
session_start();
include('db.php');
include('header.php');   
$cid = $_SESSION['id'];
//$ownerid = '1';
$query = "SELECT * FROM Service WHERE cid = $cid";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Services </title>
        <link rel="stylesheet" type="text/css" href="css/services.css">
    </head>
    
    <body>
	<div class="words">
 <center>
        <p> </p>
        <?php
  if(mysqli_num_rows($result)>0){
  ?>
  <table align="center" border="1px" style="width:800px; line-height:40px;">
   <tr>
    <th colspan="9"><h2>Service</h2></th>
   </tr>
                <th> Service ID: </th>
    <th> Service Type: </th>
    <th> Service Date: </th>
    <th> Highest bidder: </th>
                <th> Current bid: </th>
                <th> Action: </th>
                <th> Status: </th>
                <th> Completed? </th>
   
   <?php
    while($rows = mysqli_fetch_assoc($result))
    {
   ?>
   <tr>
    <th><?php $sid = $rows['sid']; ?>
    <form class="petinfo-form" action="Serviceinfo.php" method ="POST">
    <button  name="sid_in" Value = <?php echo $sid; ?> style="border: none; background: none;">
    </form><?php echo $rows['sid']; ?></th>
       <th><?php echo $rows['stype']; ?></th>
    <th><?php echo $rows['fromdate']; ?></th>
    <?php if($rows['pid'] == null){ 
                ?>
                <th><a>No bidder </a></th>
                <?php
                }
                else{ ?>
        <th><form class="pet-form" action="petinfo.php" method ="POST">
                    <button  name="pid_in" Value = <?php echo $rows['pid']; ?> style="border: none; background: none;"> <?php 
                    $pid = $rows['pid'];
                    $q= "SELECT pet_name FROM pets WHERE pid = $pid";
                    $sql = mysqli_query($con,$q);
                    echo(mysqli_fetch_assoc($sql)['pet_name']); ?> </button></a>
                    </form> </th>
                <?php } ?>
                <th><?php echo $rows['minbid']; ?></th>
                <th>
                <form class="accept-form" action="accept.php" method ="POST">
                <button type="next" class="addsvcbtn" name="sid_in" Value = <?php echo $rows['sid']; ?> >Accept</button></a>
                </form> </th>
                <th><?php if($rows['completed']==1){echo 'completed';}elseif($rows['availability'] == 1){echo 'ongoing';}else{echo 'accepted';}; ?></th>
                <th>
                <form class="complete-form" action="complete.php" method ="POST">
                <button type="next" class="addsvcbtn" name="sid_in" Value = <?php echo $rows['sid']; ?> >Complete </button></a>
                </form> </th>
                    
   </tr>
   <?php
    }
    ?>
   </table>
  </div>
  <?php
  }
  else{
   ?><center><div class="words"><h2><a> You do not have any Services Registered </a></h2></center>
  <?php }
  ?>
  <p></p>
        <h1>
            <div align="center" class="clearfix">
            <a href="addservice.php"> <button type="next" class="addsvcbtn">Add Service</button></a> 
        </h1></div></div>
     </center>
	 </div>
    </body>
</html>