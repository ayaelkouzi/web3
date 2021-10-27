<!DOCTYPE html>
<html>
<head>
    <title>ORA Beauty</title>
    <link rel="stylesheet" type="text/css" href="web.css">
</head>
<body>
   
	
<div  class="topnav">
<a href="ORA.html"> ORA Beauty </a>
<a href="makeup1.html"> MakeUp </a>
<a href="lips1.html"> Lips </a>
<a href="eyes1.html"> Eyes </a>
<a href="brushes1.html"> Brushes </a>
<a href="skincare1.html"> Skincare</a>
<div class="topnav-right">

<a href="cart-view.php">Shopping Cart <img src="cart" style="width:15px;margin-left:5px;"/> </a>
<a href="Index.php">Login  <img src="login" style="width:16px;margin-left:1px;margin-bottom:0"/></a>
</div>
</div>

 <header>
        <center><h1 style="color:white; background-color:#333;">ORA Beauty</h1></center>
    </header>
    <main>
        <form action="cart.php" method="post">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="productID" value=<?php echo $productID; ?>>

           <center> <label>Item:</label>
            <?php echo $productID; ?></br>
            </br>

            <label>Quantity:</label>
            <select name="itemqty">
            <?php for($i = 1; $i <= 10; $i++) : ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            <?php endfor; ?>
            </select>
            <label>&nbsp;</label>
			</br>
			</br>
            <input type="submit" value="Add Item"></br></br>
        </form>
		</center>
		
    </main>
</body>
</html>
