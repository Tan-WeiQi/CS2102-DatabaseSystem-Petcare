<?php
session_start();
include('db.php');
include('header.php');
$cid = $_SESSION['id'];
$query = "SELECT * FROM Service WHERE cid = $cid and availability = true";
$q6 = "SELECT * FROM Service WHERE oid = $cid and completed = false";
$result = mysqli_query($con, $query);
$result6 = mysqli_query($con, $q6);
$q2 = "SELECT * FROM SERVICE where availability = true";
$reco = mysqli_query($con,$q2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to PAWsome Boarding</title>  
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
  
<div class="split left"> 
<center><div class ="txt"><p><h3> Active Services Available</h3></p></div>
<?php if(mysqli_num_rows($reco) == 0){ ?> <a> No Current Listing </a></center>
  <div class="centered">
  <?php } else{ 
    while($recorow = mysqli_fetch_assoc($reco))
    {
      ?>
    <div class="newcenter">
      <?php $sid = $recorow['sid']; ?>  <?php
              $q= "SELECT display_name FROM `users` WHERE USERID = $sid";
              $sql = mysqli_query($con,$q);
              $q3 = "SELECT * FROM service WHERE sid= $sid";
              $sqll = mysqli_query($con,$q3);
              $rrrow= mysqli_fetch_assoc($sqll);
              $ctid =$rrrow['cid'];
              $stype = $rrrow['stype'];
              $animal_type = $rrrow ['ptype'];
              $curr_bid = $rrrow['minbid'];
              $q= "SELECT display_name FROM `users` WHERE USERID = $ctid";
              $sql = mysqli_query($con,$q);
              $dname = mysqli_fetch_assoc($sql)['display_name'];?>
              
              <form class="owner-form" action="Serviceinfo.php" method ="POST"> <button  name="sid_in" Value = <?php echo $sid; ?> style="border: none; background: none;">
              <h2><?php echo($stype) ?><a> Service</a></h2> 
              </form>              
             
              <a>Care Taker's Name : </a><?php echo($dname);?>
      
            
             <p>
             <a> Animal Type: </a> <?php echo($animal_type);?>
             </p>
             <p>
             <a> Current Bid: </a> <?php echo($curr_bid); ?>
              </p>
            </h2>
    </div>
    <?php
				} }
				?>   
  </div>
</div>

<div class="split right">
<?php  if($_SESSION['type']=='Caretaker'){ ?>
<center><div class ="txt"><p><h3>Active Services</h3></p></div>
  <?php
    if(mysqli_num_rows($result) == 0){ ?> <a> You have no active Services. </a></center>
    <?php } else{ 
        while($rows = mysqli_fetch_assoc($result))
        {
        ?>
        <div class="newcenter">
          <h2><?php echo $rows['stype'] ?></h2>
     <p>
        <?php if($rows['pid'] == null){ ?> <a>No bidder </a>
        <?php }
            else{
            $pid = $rows['pid'];
            $q= "SELECT pet_name FROM `pets` WHERE pid = $pid";
            $sql = mysqli_query($con,$q);
            echo(mysqli_fetch_assoc($sql)['pet_name']); } ?></p>
        </div>
    <?php
                } }}
else{	
    		?>
<center><div class ="txt"><p><h3>Current Bids</h3></p></div>
    <?php
    if(mysqli_num_rows($result6) == 0){ ?> <a> Have not bid for any Services </a></center>
    <?php } else{ 
        while($rows = mysqli_fetch_assoc($result6))
        {
        ?>
        <div class="newcenter">
        <?php if($rows['availability']==FALSE) {
          $status = "accepted";
        }
        else{
          $status = "ongoing";
        } ?>
        <h2>Service Name: <?php echo $rows['stype'] ?></h2>
        <h3>Your Bid: <?php echo $rows['minbid'] ?></h3>
        <h3>Status: <?php echo $status?></h3>

        </div>

    <?php } }} ?>
  </div>
</html>