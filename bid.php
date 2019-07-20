<?php
session_start();
include('db.php');
$curr_user = $_SESSION['id'];
$sid = $_SESSION['sid'];
$new_bid = $_POST['bid'];
$pet_name = $_POST['pet_name'];
$peto = "SELECT * FROM pets WHERE pet_name = '$pet_name' and oid = $curr_user";
$r = mysqli_query($con, $peto);
$rr=  mysqli_fetch_assoc($r);
if(mysqli_num_rows($r) == 0){
    echo("this is not a registered pet");
    header("refresh:1; url=home.php");
}
else{
    $pid = $rr['pid'];
    $pet_type = $rr['pet_type'];
}
$q = "SELECT * FROM Service WHERE sid = $sid";
$result = mysqli_query($con, $q);
$row = mysqli_fetch_assoc($result);
$ptype = $row['ptype'];
$curr_bid = $row['minbid'];
if($ptype != $pet_type){
    echo("Pet type not preffer");
    header("refresh:1; url=home.php");
}
elseif($new_bid > $curr_bid){
    $q2 = "UPDATE SERVICE SET  pid = $pid, minbid = $new_bid, oid=$curr_user where sid = $sid";
    mysqli_query($con, $q2);
    echo("$pet_name' has successully bidded");
    header("refresh:1; url=home.php");
}
else{
    echo("bid must be bigger than current bid");
    header("refresh:1; url=home.php");
}
?>