<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
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
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="sub_page">
<div class="dizas_area">
        <!--Header-->
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
                    <a class="nav-link "  href="categories.html"> Categories <span class="sr-only"></span> </a>
                    <div class="dropdown-content">
                      <a href="#">CSE</a><br>
                      <a href="index2.php">ICE</a><br>
                      <a href="#">EEE</a><br>
                      <a href="#">CIVIL</a><br>
                      <a href="#">ME</a><br>
                
                    </div>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link " href="index.php">Account</a>
                    <div class="dropdown-content">
                      <a href="login.php">Already a member?Login</a>
                      <a href="signup.php">SignUp</a>
                      <br>
                    </div>
                   </li>
                   <li class="nav-item">
                    <a href="cart.php" style="padding-top: 100px;">
                      <img src="https://rails-assets-us.bookshop.org/assets/basket-7f87243784551efd10fff73d50bd0d2e014dfc075f31d6f1bf2de0cd9e1c3be3.svg" alt="" style="margin-right: 30px;">
                    </a>
                    </li>
                    
                
                  
                </ul>
                
                
                 
                 
                </nav>
                </div>
        </header>         

<section style="margin-left: 595px">

	<h1>DashBoard</h1>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
    </section>

</body>
</html>