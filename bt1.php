<?php 

	
	$n = $i= 1;
	echo 1 .'<br>';

	
	while( $i < 10 ) { 
		$i++;
		$n++;
		echo $i.'      ';
		$t=1;
		while ($t < $n) {
			$i++;
			echo $i.'      ';
			
			$t++;
		}

		echo '<br>';
	}
	
?>