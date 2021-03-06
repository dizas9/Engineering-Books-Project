<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
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
                  <form action="php/signup.php" class="sazid_search_form" style="min-width: auto;" method="post">
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
                      <a href="#">ICE</a><br>
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
                    <a href="" style="padding-top: 100px;">
                      <img src="https://rails-assets-us.bookshop.org/assets/basket-7f87243784551efd10fff73d50bd0d2e014dfc075f31d6f1bf2de0cd9e1c3be3.svg" alt="" style="margin-right: 30px;">
                    </a>
                    </li>
                    
                
                  
                </ul>
                
                
                 
                 
                </nav>
                </div>
        </header>         
<div class="register-box" style="margin-left: 188px; margin-right: 200px;">
  	  	<div class="register-box-body">
    	<p class="login-box-msg">Register a new membership</p>

    	<form action="signup.php" method="POST">
      <?php include('errors.php'); ?>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $username; ?>" required>
            
          </div>
          
      		<div class="form-group has-feedback">
        		<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $email; ?>" required>
        	
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
         
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="repassword" placeholder="Retype password" required>
            
          </div>
          
                
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="reg_user"> Sign Up</button>
        		</div>
      		</div>
    	</form>
      <br>
      <a href="login.php">I already have a membership</a><br>
      <a href="dizas.html"> Home</a>
  	</div>
</div>
 <!-- footer section -->
 <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://protfolio.html">Id 19105003 & 19105021 </a>
      </p>
    </div>
  </footer>
  <!-- footer section -->
	
</body>
</html>