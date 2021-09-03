<?php
    // get the data from the form
    $login_okay = 'x';
    $user_email = "";
    $user_password = "";
    session_start();

    if (count ($_POST) != 0) { 

        $db = new PDO('mysql:host=localhost;dbname=web3', 'root', '');
    
        $user_email = htmlspecialchars($_POST['user_email']);
        $user_password = htmlspecialchars($_POST['user_password']);

        $statement = $db->prepare("SELECT * FROM administrators WHERE email = :email_entry");
        $statement->bindValue(':email_entry', $user_email);
        $statement->execute();
        $admin = $statement->fetch();
        $statement->closeCursor();

        $login_okay = 'n';
        if (count ($admin) != 0) {
            if ($admin['password'] == $user_password) {
                $login_okay = 'y';
                $_SESSION['user_email'] = $user_email;
                $_SESSION['firstName'] = $admin['firstName'];
                $_SESSION['lastName'] = $admin['lastName'];
                
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
<title> Login </title>
<link rel="stylesheet"  type="text/css" href="web.css">
</head>
<body>
<div  class="topnav" id="navnav">
<a href="ORA.html"> ORA Beauty </a>
<a href="makeup1.html"> MakeUp </a>
<a href="lips1.html"> Lips </a>
<a href="eyes1.html"> Eyes </a>
<a href="brushes1.html"> Brushes </a>
<a  href="skincare1.html"> Skincare</a>
<div class="topnav-right">
<a href="cart-view.php">Shopping Cart </a>
<a class="active" href="Index.php">Login </a>
</div>
</div>
	<br>
	<br>

	<div id="shoppingcart" class="jumbotron">
		<center><h1>Welcome Back, Beautiful <3</h1></center>
	</div>


<h1>Login</h1>
	
	<form action="Index.php" method="post">
	<table class="center">
	<tr>
	<td>
	    <label for="user_email">Email address</label>
		</td>
		<td>
	    <input type="email" name="user_email" class="form-control" id="user_email" placeholder="Email" required>
	  </td>
	  </tr>
	  <tr>
	  <td>

	    <label for="user_password">Password</label>
		</td>
		<td>
		
	    <input type="password" name="user_password" class="form-control" id="user_password" placeholder="Password" required>
	  </td>
	  </tr>
	  </table>
</br>
	  <center><button type="submit" class="btn btn-default">Login</button></center>

	  	<?php
		
		if ($login_okay == 'y') {
        	header ('Location: ORA.html');
            exit();
        } else if ($login_okay == 'n') {
            echo  "Error : Invalid credential, you must correctly login to view this site.";
        }
    ?> 
	</form>




</body>
</html>