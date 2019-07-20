<? php
?> 
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Profile </title>
        <link rel="stylesheet" type="text/css" href="css/profile.css">
    </head>
    
    <body>
            <div class="topnav">
                <a href=login-ed_owner.php>Home</a> <!-- insert js -->
                <a class= "active" href=Profile.php>Profile</a> <!-- insert js -->
                <a href=Pets.php>Pet</a> <!-- insert js -->
                <a href=Ownerhistory.php>History</a> <!-- insert js -->
                <form align="right" name="form1" method="post" action="log_out.php">
                    <label class="logoutLblPos">
                        <input name="submit2" type="submit" id="submit2" value="Log Out"> <!-- add js-->
                    </label>
                </form>
        </div>
		<div class="box">
        <header>Profile</header>
        
        <h4> First name: <!-- input first name php--> </h4>
        <h4> Last Name: <!-- input last name php--> </h4>
        <h4> Display Name: <!-- input display name php--> </h4>
        <h4> Gender: <!-- input gender php--> </h4>
        <h4> Phone Number: <!-- input phone number php--> </h4>
        <h4> Email: <!-- input email php--> </h4>
        <h4> Country: <!-- input country php--> </h4>
        <h4> Address: <!-- input address php--> </h4>
        <h4> Birthday: <!-- input birthday php--> </h4>
        
        <div class="clearfix">
                <button type="next" class="Updatebtn">Update Profile</button> <!-- add js-->
                <button type="next" class="Updatebtn">Update Password</button> <!-- add js-->
        </div>
		</div>
    </body>
</html>    