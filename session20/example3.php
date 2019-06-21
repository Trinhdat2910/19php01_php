
<?php 
	
	for ($i=1; $i <=8 ; $i++) { 

		for ($j=1; $j <=8 ; $j++) {

			$m=$i+$j;
			if ($m % 2 ==0) {
				echo '<div style="width:30px; background: red; height: 30px; float:left"></div>';
			}
			else{
				echo '<div style="width:30px; background: #000; height: 30px; float:left"></div>';
			}

	}
	echo '<br style="line-height:30px;">';
	

	}
	
?>
