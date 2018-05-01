//Veritabanı olmadan PHP Alışveriş Sepeti

//PHP Shopping Cart without Database

//Product Gallery and Cart HTML 

<html lang="en">
<head>
<title>PHP Shopping Cart without Database</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <h1>Shopping Cart without Database</h1>
    <?php 
	require_once "product-gallery.php";
    ?>
    <div class="clear-float"></div>
    <div id="shopping-cart">
        <div class="txt-heading">
            Shopping Cart <a id="btnEmpty" class="cart-action"
                onClick="cartAction('empty','');"><img
                src="images/icon-empty.png" /> Empty Cart</a>
        </div>
        <div id="cart-item">
        <?php 
		require_once "ajax-action.php";
        ?>
        </div>
    </div>
</body>
</html>
