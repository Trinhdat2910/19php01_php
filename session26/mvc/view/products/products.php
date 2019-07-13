<h1>products</h1>
<p> <?php echo $showProducts; ?></p>
<?php 
	for ($i=1; $i <= 3; $i++) { 
		
	
?>
<a href="index.php?action=detailproducts&id=<?php echo $i?>"> product <?php echo $i?></a>

<?php 
	} 
?>