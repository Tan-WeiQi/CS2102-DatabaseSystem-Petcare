<?php
session_start();
include('db.php');
include('header.php');   
$current= $_SESSION['id'];
$session_type=$_SESSION['type'];
$reviewee = $_POST['reviewee'];
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Leave A Review </title>
        <link rel="stylesheet" type="text/css" href="css/leavereview.css">
    </head>
    
    <body>
	<div class="box">
        <header>Leave A Review</header>
        
        <h1>
            <div class="row">
                <div class="col-25">
                    <label for="review">Review</label> <!-- add php-->
                </div>
                <div class="col-75">
					<form class="pet-form" action="write_review.php" method ="POST">
                    <textarea id="review" name="review" placeholder="Write something.." style="height:200px"></textarea>
                	<div class="clearfix">
						<button type="sumbit" name="reviewee" value = <?php echo($reviewee) ?> class="Submitbtn">Submit</button> <!-- add js-->
					</div>
					</form>
				</div>
			</div>
	</div>
        </h2>
    </body>
</html>