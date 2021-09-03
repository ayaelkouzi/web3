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

<a class="active" href="cart-view.php">Shopping Cart <img src="cart" style="width:15px;margin-left:5px;"/> </a>
<a href="Index.php">Login  <img src="login" style="width:16px;margin-left:1px;margin-bottom:0"/></a>
</div>
</div>
    <header>
        <center><h1 style="background-color:#333; color:white;" >ORA Beauty</h1> </center>
    </header>
    <main>
       <center> <h1>Your Cart</h1> <img src="cart" style="width:40px"></br> </center>
        <?php if (empty($_SESSION['cart']) || 
                  count($_SESSION['cart']) == 0) : ?>
           <center> <p>There are no items in your cart.</p></center>
        <?php else: ?>
            <form action="cart-view.php" method="post">
            <input type="hidden" name="action" value="update">
            <table>
                <tr>
                    <th>Item</th>
                    <th>Item Cost</th>
                    <th>Quantity</th>
                    <th>Item Total</th>
                </tr>
            <?php foreach( $_SESSION['cart'] as $key => $item ) :
                $cost  = number_format($item['cost'],  2);
                $total = number_format($item['total'], 2);
            ?>
                <tr>
                    <td>
                        <?php echo $key." ".$item['name']; ?>
                    </td>
                    <td>
                        <?php echo $cost; ?>
                    </td>
                    <td>
                        <input type="text" class="cart_qty"
                            name="newqty[<?php echo $key; ?>]"
                            value="<?php echo $item['qty']; ?>">
                    </td>
                    <td class="right">
                        $<?php echo $total; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
                <tr>
                    <td colspan="3"><b>Subtotal</b></td>
                    <td>$<?php echo get_subtotal(); ?></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input type="submit" value="Update Cart">
                    </td>
                </tr>
            </table>
            <p>Click "Update Cart" to update quantities in your
                cart. Enter a quantity of 0 to remove an item.
				</br>
				Click "Checkout" to Chekout your order.
            </p>
            </form>
        <?php endif; ?>
		
		<div class="topnav">
        <a href="ORA.html">Continue Shopping</a>
		<a href="cart.php?action=empty_cart">Empty Cart</a>
		<a href="payment.html">Checkout</a>
		</div>
    </main>
</body>
</html>