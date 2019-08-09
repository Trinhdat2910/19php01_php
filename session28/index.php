<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Store</title>
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
            <h1 class="mb-0"><a href="" class="text-black h2 mb-0">Store</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li >
                  <a href="" >Home</a>
                </li>
                <li class="has-children">
                  <a href="#">Bút</a>
                  <ul class="dropdown">
                    
                    <li><a href="#">Bút chì</a></li>
                    <li><a href="#">Bút bi</a></li>
                    <li><a href="#">Bút mực</a></li>
                   
                  </ul>
                </li>
                
                <li class="has-children">
                  <a href="#">Vở</a>
                  <ul class="dropdown">
                    
                    <li><a href="#">Vở 96 trang</a></li>
                    <li><a href="#">Vở 200 Trang</a></li>
                    <li><a href="#">Sổ sách</a></li>
                   
                  </ul>
                </li>
                <li class="has-children">
                  <a href="#">Sách Giáo Khoa</a>
                  <ul class="dropdown">
                    
                    <li><a href="#">Tiểu Học</a></li>
                    <li><a href="#">Trung học Cơ sở</a></li>
                    <li><a href="#">Trung Học Phổ Thông</a></li>
                   
                  </ul>
                </li>
               
                <li><a href="home/ListTour/ListBlog">Balo, Cặp</a></li>
                
                <li><a href="contact.html">Contact</a></li>
                <!-- <li><a href="booking.html">Book Online</a></li> -->
              </ul>
            </nav>
          </div>

         

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
     
    </header>



	<?php 
		
		include 'controller/controllerHome.php';
		
		$controller= new Controller();
		$controller -> handleRequest();
		
	?>

    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4"> Travelers</h3>
              <p><span>48 Cao Thắng, Hải Châu, Đà Nẵng</span></p>
              <p><span>Email:</span> trinhvandat1998 &#64 gmail.com</p>
              <p><span>Tel:</span> 0348 609 278 </p>
              <p><span>Fax:</span> 0348 609 278 </p>
              <p><span>Hotline:</span> 1900 1998 (08h-23h)</p>
            </div>

            
            
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="home/ListTour/TourMienBac">Bút</a></li>
                  <li><a href="home/ListTour/TourMienTrung">Vở</a></li>
                  <li><a href="home/ListTour/TourMienNam">SGK</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">About </a></li>
                  <li><a href="home/ListTour/ListBlog">Blog</a></li>
                  <li><a href="#">Liên Hệ</a></li>
                  <li><a href="#">Khuyến Mãi</a></li>
                </ul>
              </div>

            </div>

            

          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
           

            <div class="mb-5">
              <h3 class="footer-heading mb-2">Theo Dõi Travelers</h3>
              <p>Chúng tôi sẽ cập nhật những thông tin mới nhất cho bạn!</p>

              <form action="#" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                  </div>
                </div>
              </form>

            </div>

          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="mb-5">
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>

            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
    
  </div>

  <script src="webroot/index/js/jquery-3.3.1.min.js"></script>
  <script src="webroot/index/js/jquery-migrate-3.0.1.min.js"></script>

  <script src="webroot/index/js/jquery-ui.js"></script>
  <script src="webroot/index/js/popper.min.js"></script>
  <script src="webroot/index/js/bootstrap.min.js"></script>
  <script src="webroot/index/js/owl.carousel.min.js"></script>
  <script src="webroot/index/js/jquery.stellar.min.js"></script>
  <script src="webroot/index/js/jquery.countdown.min.js"></script>
  <script src="webroot/index/js/jquery.magnific-popup.min.js"></script>
  <script src="webroot/index/js/bootstrap-datepicker.min.js"></script>
  <script src="webroot/index/js/aos.js"></script>

  <script src="webroot/index/js/main.js"></script>
   <script src="webroot/index/js/wizard.js"></script>

  
    
  </body>
</html>