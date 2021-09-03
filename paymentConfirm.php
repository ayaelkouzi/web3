<html>
	<head>
		
	</head>
    <body>
	<center>
	<?php
	
		print "Thanks " . $_POST["firstName"] . " " . $_POST["lastName"] . " for making a purchase with us!!<br>";
		
		print "Your package will ship to " . $_POST["address"] . " " . $_POST["city"] . " " . $_POST["state"] . " " . $_POST["zip"] . ". <br>";
		
		print "You will receive info about your purchase in your e-mail, " . $_POST["email"] . "!   <br>";
		
		print "If anything happens to your purchase, we can reach you at " . $_POST["phone"] . ".  <br>";
		
		print "Thanks again for shopping with us! Seeya soon Beauty Lover! ";

	?>

	<p>
	 To Go To The Main Page <a href="ORA.html">click this link!</a></p>		
	 </center>
	</body>
</html>