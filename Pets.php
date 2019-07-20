<?php
session_start();
include('db.php');
include('header.php');
$ownerid = $_SESSION['id'];
#$ownerid = '1';
$query = "SELECT * FROM pets WHERE oid = $ownerid";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Pets </title>
        <link rel="stylesheet" type="text/css" href="css/pets.css">
    </head>
    
    <body>
	<div class = "box">

        <?php
		if(mysqli_num_rows($result)>0){
		?>
		<table align="center" border="1px" style="width:600px; line-height:40px;">
			<tr>
				<th colspan="4"><h2>Pets</h2></th>
			</tr>
			
				<th> Pet ID: </th>
				<th> Pet Name: </th>
				<th> Pet Type: </th>
			
			<?php
				while($rows = mysqli_fetch_assoc($result))
				{
			?>
			<tr>
			
				<th><?php $pid = $rows['pid']; ?>
				<form class="petinfo-form" action="Petinfo.php" method ="POST">
				<button  name="pid_in" Value = <?php echo $pid; ?> style="border: none; background: none;">
				</form>	<?php echo $pid; ?>
				</th>
				<th><?php echo $rows['pet_name']; ?></th>
				<th><?php echo $rows['pet_type']; ?></th>
			
			</tr>
			<?php
				}
				?>
			</table>
            <!-- 
			<div class="clearfix">
                <button type="next" class="Seemorebtn">See More</button></div>
			-->
		<p></p>
		<?php
		}
		else{
			?>
			<h2><center>
			<?php echo("You do not have any Pets Registered");	?>
			</center></h2>
			<?php
			}
			
		?>
        <p> </p>
		
            
        <h1>
            <div align="center" class="clearfix">
                <a href=addpet.php><button type="next" class="Addpetbtn">Add Pet</button></a>
			</div> <!-- add js-->
        </h1>
    </div>
    </body>
</html>