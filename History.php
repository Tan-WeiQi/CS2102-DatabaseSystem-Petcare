<?php
session_start();
include('db.php');
include('header.php');
$cid = $_SESSION['id'];
//$ownerid = '1';
$type = $_SESSION['type'];
if($type=='Caretaker'){
 $query = "SELECT * FROM History WHERE cid = $cid";
}
else{
 $query = "SELECT * FROM service where oid = $cid";
}
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> History </title>
        <link rel="stylesheet" type="text/css" href="css/history.css">
    </head>
    
    <body>
<div class="box">
 <center>

   <?php
  if($type =='Caretaker'){
   if(mysqli_num_rows($result)>0){ 
   ?>
   <table align="center" border="1px" style="width:800px; line-height:40px;">
    <tr>
     <th colspan="8"><h2>HISTORY</h2></th>
    </tr>
                 <th>Service Name: </th>
     <th> PET Name</th>   
    <?php while($rows = mysqli_fetch_assoc($result)) {
                  $sid = $rows['sid'];
                     $pid = $rows['pid'];
      $sname = $rows['name'];
                     $q = "SELECT pet_name From pets where pid = $pid";
      $iwantname = mysqli_query($con, $q);
      $gimmename = mysqli_fetch_assoc($iwantname);?>
    <tr><th><?php echo $sname; ?></th> 
         <th><form class="review-form" action="leavereview.php" method ="POST"> 
     <button  name="reviewee" Value = <?php echo $pid; ?> style="border: none; background: none;">
    <h4><?php echo $gimmename['pet_name']; ?></h4></button></form></th>
    </tr>
    <?php }?>
   <table>
    <?php } else{ 
    ?><h2>
    <?php
    echo("You have no History! Start servicing now!"); }
    ?>
    </h2>
    <?php
    
    ?>
  
   <?php
  }
  else{
   if(mysqli_num_rows($result)>0){
    ?>
    <table align="center" border="1px" style="width:800px; line-height:40px;">
    <tr>
     <th colspan="8"><h2>HISTORY</h2></th>
    </tr>
     <th> Service Provider Name: </th>
     <th>Service Name: </th>
     <th> Your winning bid</th>   
    <?php
    while($rows = mysqli_fetch_assoc($result)){
     $sname = $rows['stype'];
     $winbid = $rows['minbid'];
     $providerid = $rows['cid'];
     $getname = "SELECT display_name from Users where UserID = $providerid";
     $thisname = mysqli_query($con,$getname);
     $justgimmename = mysqli_fetch_assoc($thisname);
     $name = $justgimmename['display_name'];
    ?>
    <tr>
     <th><form class="review-form" action="leavereview.php" method ="POST"> 
     <button  name="reviewee" Value = <?php echo $providerid; ?> style="border: none; background: none;">
     <h4><?php echo $name; ?></h4></button></form></th>
	 <th><?php echo $sname; ?></th>
     <th><?php echo $winbid; ?></th>
    </tr>
    <?php
    }
    ?>
    </table>
    <?php
   }
   else{ 
    ?>
    <h2>
    <?php
    echo("You have no History.");
    ?>
    </h2>
   <?php }
  }
   ?>
    </center>  
</div>	
    </body>
</html>