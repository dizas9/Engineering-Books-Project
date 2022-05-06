<?php
session_start();
if (isset($_POST["checkout-btn"])) {
    $order_number = rand(100, 999);
}
?>
<HTML>
<HEAD>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" href="pngs/icons.png" type="image/gif">
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Engineering Books</title>
    <!--css+bootstrap-->
   <link rel="stylesheet" href="css/bootstrap.css"/>
    <!--sazid's font-->
    <link rel="stylesheet" href="css/font.css"/>
    <!--Coustoms_Style-->
    <link rel="stylesheet" href="css/style.css"/>
    <!--Responsive_css-->
    <link rel="stylesheet" href="css/responsive.css"/>
    <link rel="stylesheet" href="css/fontawesome.min.css">
<TITLE>One Page Checkout Script Free Template</TITLE>
<link href="./assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="./assets/css/one-page-checkout.css" type="text/css"
	rel="stylesheet" />
<script src="./vendor/jquery/jquery.min.js" type="text/javascript"></script>
<script src="./vendor/jquery/jquery-ui.js"></script>
</HEAD>
<BODY class="dizas_area">
<header class="header_section">
            <div class="container-flued">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <div class="logo">
                    <a href="dizas.html" class="navbar-brand">
                            <img src="images/Engineering Books-logos_transparent.png" width="200" height="120">
                        
                    </a>
                  </div>
                  <form action="" class="sazid_search_form" style="min-width: auto;">
                  <div class="sazid_search"> 
                    <input type="text" class="sazid_search_input" placeholder="search books.." name="keywords">
                   </div>
                   <div>
                     <button class="sazid_button_style" type="submit">
                       <img src="https://rails-assets-us.bookshop.org/assets/search-5ecec60a28b1d4637fce12195154612dc4673bce690a66c8c3412c23d4162932.svg" alt="">
                     </button>
                   </div>
                  </form>
                  
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="dizas.html" class="nav-link pl-lg-0">Home</a>
                </li>
                <li class="nav-item">
                    <a href="dizas.html" class="nav-link">About Us</a>
                </li>
                <li class="nav-item active dropdown ">
                    <a class="nav-link "  href="#"> Categories <span class="sr-only"></span> </a>
                    <div class="dropdown-content">
                      <a href="#">CSE</a><br>
                      <a href="ICE/index2.php">ICE</a><br>
                      <a href="#">EEE</a><br>
                      <a href="#">CIVIL</a><br>
                      <a href="#">ME</a><br>
                
                    </div>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link " href="#">Account</a>
                    <div class="dropdown-content">
                      <a href="login.php">Already a member?Login</a>
                      <a href="signup.php">SignUp</a>
                      <br>
                    </div>
                   </li>
                   <li class="nav-item">
                    <a href="view/billing-details.php" style="padding-top: 100px;">
                      <img src="https://rails-assets-us.bookshop.org/assets/basket-7f87243784551efd10fff73d50bd0d2e014dfc075f31d6f1bf2de0cd9e1c3be3.svg" alt="" style="margin-right: 30px;">
                    </a>
                    </li>
                    
                
                  
                </ul>
                
                
                 
                 
                </nav>
                </div>
        </header>         

	<div class="phppot-container">
		<div class="page-heading">Information and Communication Technology</div>

		<form name="one-page-checkout-form" id="one-page-checkout-form"
			action="" method="post" onsubmit="return checkout()">
			
<?php if(!empty($order_number)){?>

			<div class="order-message order-success">
			You order number is <?php echo $order_number;?>.
		<span class="btn-message-close"
					onclick="this.parentElement.style.display='none';" title="Close">&times;</span>

			</div>
<?php }?>


			<div class="section product-gallery">
        			<?php require_once './view/product-gallery.php'; ?>
      		 </div>
			<div class="billing-details">
		            <?php require_once './view/billing-details.php'; ?>
			</div>

			<div class="cart-error-message" id="cart-error-message">Cart must not
				be emty to checkout</div>
			<div id="shopping-cart" tabindex="1">
				<div id="tbl-cart">
					<div id="txt-heading">
						<div id="cart-heading">Your Shopping Cart</div>
						<div id="close"></div>
					</div>
					<div id="cart-item">
        				<?php require_once './view/shopping-cart.php'; ?>
           			 </div>
				</div>
			</div>

			<div class="payment-details">
				<div class="payment-details-heading">Payment details</div>
				<div class="row">
					<div class="inline-block">
						<div>
							<input class="bank-transfer" type="radio" checked="checked"
								value="Direct bank transfer" name="direct-bank-transfer">Direct
							bank transfer
						</div>

						<div class="info-label">Specify your order number when you make
							the bank transfer. Your order will be shippied after the amount
							is credited to us.</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div id="inline-block">
					<input type="submit" class="checkout" name="checkout-btn"
						id="checkout-btn" value="Checkout">
				</div>
			</div>
		</form>
	</div>
	<script src="./assets/js/cart.js"></script>
	<script>
	
function checkout() {

	var valid = true;
	
	$("#first-name").removeClass("error-field");
	$("#email").removeClass("error-field");
	$("#shopping-cart").removeClass("error-field");
	$("#cart-error-message").hide();
	
	var firstName = $("#first-name").val();
	var cartItem = $("#cart-item-count").val();
	var email = $("#email").val();
	var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

	$("#first-name-info").html("").hide();
	$("#email-info").html("").hide();

	if (firstName.trim() == "") {
		$("#first-name-info").html("required.").css("color", "#ee0000").show();
		$("#first-name").addClass("error-field");
		valid = false;
	}
	if (email == "") {
		$("#email-info").html("required").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (email.trim() == "") {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (!emailRegex.test(email)) {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000")
				.show();
		$("#email").addClass("error-field");
		valid = false;
	}
	if(cartItem == 0){
		$("#cart-error-message").show();
		$("#shopping-cart").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;	
}
</script>
</BODY>
</HTML>