<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SmartPhone</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="{{asset('')}}">
  

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="webroot/index/fonts/icomoon/style.css">

    <link rel="stylesheet" href="webroot/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="webroot/index/css/magnific-popup.css">
    <link rel="stylesheet" href="webroot/index/css/jquery-ui.css">
    <link rel="stylesheet" href="webroot/index/css/owl.carousel.min.css">
    <link rel="stylesheet" href="webroot/index/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="webroot/index/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="webroot/index/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="webroot/index/https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    <link rel="stylesheet" href="admin_asset/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin_asset/vendors/iconfonts/font-awesome/css/font-awesome.css">
   


    <link rel="stylesheet" href="webroot/index/css/aos.css">

    <link rel="stylesheet" href="webroot/index/css/style.css">
    <link rel="stylesheet" href="webroot/index/css/wizard.css">


    
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
       <header class="site-navbar py-1" role="banner" >
      
      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0">SmartPhone</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li >
                  <a href="index.php" >Home</a>
                </li>
                <li class="has-children">
                  <a href="#">Điện Thoại</a>
                  <ul class="dropdown">
                    
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">Oppo</a></li>
                    <li><a href="#">Iphone</a></li>
                   
                  </ul>
                </li>
                
                <li class="has-children">
                  <a href="#">LapTop</a>
                  <ul class="dropdown">
                    
                    <li><a href="#">DELL</a></li>
                    <li><a href="#">HP</a></li>
                    <li><a href="#">LG</a></li>
                   
                  </ul>
                </li>
                <li class="has-children">
                  <a href="#">Phụ Kiện</a>
                  <ul class="dropdown">
                    
                    <li><a href="#">Cáp,Sạc</a></li>
                    <li><a href="#">Loa, tai nghe</a></li>
                    <li><a href="#">Chuột, Bàn phím</a></li>
                   
                  </ul>
                </li>
               
                                
                <li><a href="contact.html">Contact</a></li>
                <!-- <li><a href="booking.html">Book Online</a></li> -->
              </ul>
            </nav>
          </div>
        <div class="col-6 col-xl-2 text-right">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
              	<?php 
              	if (!isset($_SESSION['login'])) {
              	              	
              	?>
                <li>
                  <a href="index.php?controller=user&action=login" class="pl-3 pr-3 text-black" > Login                    
                  </a>
                </li>
                <li>
                  <a href="index.php?controller=user&action=register" class="pl-3 pr-3 text-black" > Register                    
                  </a>
                </li>
                <?php } else { ?>
                  <li>
                    
                  <a class="pl-3 pr-3 text-black nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false" style=" width: 200px;"><span class="profile-text">Hi, <?php echo $_SESSION['login']?></span> 

                      
                  </a>
                
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                
              </a>
              <a class="dropdown-item mt-2" href="admin.php">
                Manage
              </a>
             
              
              <a class="dropdown-item" href="index.php?controller=user&action=logout">
                Đăng Xuất
              </a>
            </div>
          	</li>
          <?php }?>
                </li>


              </ul>
            </div>
         

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
     
    </header>