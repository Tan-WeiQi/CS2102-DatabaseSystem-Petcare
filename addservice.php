<?php
session_start();
include('header.php');

?>  
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Services </title>
        <link rel="stylesheet" type="text/css" href="css/add&editservice.css">
    </head>
    
    <body>
	<div class="box">
	<center>


        <header><h3> Add Service </h3></header>
        
        <h4>
            <div class="container">
                <form class="Addsvcbtn" action="addservice2.php" method ="POST">
                    <!-- Text field -->
                    <div class =" form-group ">
                        <label for=" stype_in ">Service Type: </ label > <!-- add php-->
                        <input type ="text" class =" form-control " name="stype_in">
                    </div >
                    <div class =" form-group ">
                        <label for=" startdate_in ">Start Date: </ label > <!-- add php-->
                        <input type ="text" class =" form-control " name="startdate_in" placeholder="DD Month YYYY">
                    </div >
                    <div class =" form-group ">
                        <label for="enddate_in ">End Date: </ label > <!-- add php-->
                        <input type ="text" class =" form-control " name="enddate_in" placeholder="DD Month YYYY">
                    </div >
                    <div class =" form-group ">
                        <label for="Min_bid_in">Minimum bid: </ label > <!-- add php-->
                        <input type ="text" class =" form-control " name="Min_bid_in">
                    <div class =" form-group ">
                        <label for=" ptype_in ">Pet Types Accepted: </ label > <!-- add php-->
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
					<p></p>
                    <div class="clearfix">

                    <button type="next" class="Addsvcbtn">Add Service</button> <!-- add js-->
                    </div>
                </form>
            </div>
        </h4>
        
        <h2>
           
        </h2>
		</center>
		</div>
    </body>
</html>