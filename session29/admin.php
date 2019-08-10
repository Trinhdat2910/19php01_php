<?php 
	
	include 'controller/backend_controller.php';
	session_start();
	include 'layout/admin/header.php';
	$backend= new BackendController();
	$backend -> handleRequest();
	
	include 'layout/admin/footer.php';
	
?>