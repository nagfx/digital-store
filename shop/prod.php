<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
//Get method for adding/remove item to Cart
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			//get the first data only with index [0]
                        $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 
                                     'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"],
                                      'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
                                //checking new add item with currect Cart
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
                                                        
							if($productByCode[0]["code"] == $k) {
                                                               //if the quantity  is empty, starting the quantity from Zero
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
                                                                //if the item already in the Cart, add the quantity
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} 
                                //if current item is not in the cart, add the item
                                else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
                                //if the session is empty, start the new session.
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);
                                        // if no more item in cart, empty the session
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<HTML>
<HEAD>
<TITLE>Simple PHP Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>

<!-- Product Grid  -->
<div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
                        <!-- mixture of Get and post method. Get method for adding and removing items  -->
			<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
			<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" />
                        <!-- Post method for adding to Cart  -->
                        <input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
		</div>
	<?php
		}
	}
	?>
</div>
<!-- Button to take to checking cart -->
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
			<a href="checkingcart.php"><button type="button" class="btn btn-outline-secondary btn-lg" onclick=" window.open('checkingcart.php','_blank')">
				Go to cart
			</button></a>
		</div>
</BODY>
</HTML>