<a href="index.php">home</a>
<a href="index.php?action=news">news</a>
<a href="index.php?action=products">products</a>
<a href="index.php?action=contact">contact</a>
<?php 
	include 'controller/controller.php';
	$controller= new Controller();
	$controller -> handleRequest();
?>