<?php 
	session_start();
	include 'controller/frontend_controller.php';
	include 'layout/index/header.php';
?>


<?php 
	$frontend = new FrontendController();
	$frontend -> handleRequest();
?>
<?php 
	include 'layout/index/footer.php';
 ?>