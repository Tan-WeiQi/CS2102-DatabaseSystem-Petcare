<? php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Sign Up </title>
        <link rel="stylesheet" type="text/css" href="css/style2.css">
    </head>
    <body>
	<div class="signup">
        <header> Sign Up As: </header>
        
        <h1>
            <div class="container">
            <form role="form" action="signup22.php" method="POST">
            <label class = "checkboxes">
                <INPUT TYPE="radio" Name="radio" Value ="Owner"> Pet Owner</INPUT><br> <!-- input php-->
                <INPUT TYPE="radio" Name= "radio" Value ="CareTaker"> Caretaker</INPUT></label>  <!-- input php-->
				<INPUT class="nextbtn" TYPE="submit" NAME="submit" Value="Sign Up" />
            </form>
            </div>
        </h1>
        <h2>
        <!--<div class="clearfix">
                    <button type="submit" NAME= "submit" class="Signupbtn">Sign Up</button>
                </div> -->
        </h2>
	</div>
    </body>
</html>



