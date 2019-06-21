<?php echo 'hello';
	$user =" trịnh văn đạt";
	echo $user;
	$x =10;
	$y =8;
	echo "<br>";
	echo $x +$y;
	echo "<br>";
	echo $x -$y;
	echo "<br>";
	echo $x /$y;
	echo "<br>";
	echo $x *$y;

	function abc( $c, $n){
		return $c *$n;

	}
	echo "<br>";
	echo abc(6, 7);
	$i =5;
	if($i % 2){
	echo 'la so chan';
	}
	else{
	echo 'la so le';
	}
	for ($i=1; $i <= 10 ; $i++) { 
		echo $i .'<br>';
		
	}
	$n =5;
	while ( $n < 10) {
		echo $n.'<br>';
		$n++;
	}
	$m=5;
	do{
		$m++;
		echo $m.'<br>';

	}while($m<10)
 ?>
