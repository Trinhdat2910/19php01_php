<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Trang Chủ</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="webroot/fonts/icomoon/style.css">

    <link rel="stylesheet" href="webroot/css/bootstrap.min.css">
    <link rel="stylesheet" href="webroot/css/magnific-popup.css">
    <link rel="stylesheet" href="webroot/css/jquery-ui.css">
    <link rel="stylesheet" href="webroot/css/owl.carousel.min.css">
    <link rel="stylesheet" href="webroot/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="webroot/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="webroot/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="webroot/css/aos.css">

    <link rel="stylesheet" href="webroot/css/style.css">
  </head>
  <body>
<a href="index.php">Home</a>
<a href="index.php?controller=user&action=add_user">Add user</a>
<a href="index.php?controller=user&action=list_user">List user</a>

<?php 
	include 'controller/controller.php';
	$controller= new Controller();
	$controller -> handleRequest();
?>

    
</body>

