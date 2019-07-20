<?php
session_start();
include('db.php');
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Pets </title>
        <link rel="stylesheet" type="text/css" href="css/add&editpet.css">
    </head>
    
    <body>
	<center>
	<div class="box">
        <header>Add Pet</header>
            <div class="container">
			<h3>
                <form role="form" action="addpet1.php" method="POST">
                    
                    <div class =" form-group ">
                        <label for="inputPetName">Pet Name:</label > <!-- add php-->
                        <input type ="text" class ="form-control" id="inputPetName" name="petname">
                    </div >
                    <div class ="form-group">
                        <label for=" inputBreedType ">Species of Pet:</label>
					<select type="list" name="type">
						<option value="Dog" name="type">Dog</option>
						<option value="Cat" name="type">Cat</option>
						<option value="Bird" name="type">Bird</option>
						<option value="Fish" name="type">Fish</option>
						<option value="Rabbit" name="type">Rabbit</option>
						<option value="Hamster" name="type">Hamster</option>
						<option value="GuineaPig" name="type">Guinea Pig</option>
						<option value="Horse" name="type">Horse</option>
						<option value="Tortoise" name="type">Tortoise</option>
						<option value="HedgeHog" name="type">HedgeHog</option>
						<option value="Dinosaur" name="type">Dinosaur</option>
						<option value="Dragon" name="type">Dragon</option>
						<option value="Panda" name="type">Panda</option>
						<option value="Crocodile" name="type">Crocodile</option>
						<option value="Human" name="type">Human</option>
						<option value="David" name="type">David</option>
					</select>
					</div>
			</h3>
        
        <h2>
            
                <button type="next" class="Addpetbtn">Add Pet</button> <!-- add js-->
        </h2>   
			</div>
			</form>
	</div>
    </center></body>
</html>