<? php
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Pets </title>
        <link rel="stylesheet" type="text/css" href="css/add&editpet.css">
    </head>
    
    <body>
            <div class="topnav">
                <a class="active" href="#home">Home</a> <!-- add js-->
                <a href="#news">Profile</a> <!-- add js-->
                <a href="#contact">Pets</a> <!-- add js-->
                <a href="#about">History</a> <!-- add js-->
                <form align="right" name="form1" method="post" action="log_out.php">
                    <label class="logoutLblPos">
                        <input name="submit2" type="submit" id="submit2" value="Log Out"> <!-- add js-->
                    </label>
                </form>
        </div>
<div class="box">
        <header>Edit Pet</header>
        
        <h4>
            <div class="container">
                <form role="form">
                    <div class =" form-group ">
                        <label for=" inputAge ">Age</ label > <!-- add php-->
                        <input type ="text" class =" form-control " id=" inputAge ">
                    </div >
                    <div class =" form-group ">
                        <label for=" inputspecialReq ">Special Requirements</ label > <!-- add php-->
                        <input type ="text" class =" form-control " id=" inputspecialReq ">
                    </div >
                </form>
            </div>
        </h4>

        <h2>
            <div class="clearfix">
                <button type="next" class="Savebtn">Save</button> <!-- add js-->
            </div>
        </h2>
	</div>
    </body>
</html>
        
        