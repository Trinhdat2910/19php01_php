
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Trang Chủ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="index/fonts/icomoon/style.css">

    <link rel="stylesheet" href="index/css/bootstrap.min.css">
    <link rel="stylesheet" href="index/css/magnific-popup.css">
    <link rel="stylesheet" href="index/css/jquery-ui.css">
    <link rel="stylesheet" href="index/css/owl.carousel.min.css">
    <link rel="stylesheet" href="index/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="index/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="index/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="index/css/aos.css">

    <link rel="stylesheet" href="index/css/style.css">
    
  </head>
  <body>
<a href="index.php">home</a>
<a href="index.php?action=news">news</a>
<a href="index.php?action=products">products</a>
<a href="index.php?action=contact">contact</a>
<?php 
	include 'controller/controller.php';
	$controller= new Controller();
	$controller -> handleRequest();
?>
 <script src="index/js/jquery-3.3.1.min.js"></script>
  <script src="index/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="index/js/jquery-ui.js"></script>
  <script src="index/js/popper.min.js"></script>
  <script src="index/js/bootstrap.min.js"></script>
  <script src="index/js/owl.carousel.min.js"></script>
  <script src="index/js/jquery.stellar.min.js"></script>
  <script src="index/js/jquery.countdown.min.js"></script>
  <script src="index/js/jquery.magnific-popup.min.js"></script>
  <script src="index/js/bootstrap-datepicker.min.js"></script>
  <script src="index/js/aos.js"></script>

  <script src="index/js/main.js"></script>
    
</body>

