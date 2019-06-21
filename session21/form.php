<!DOCTYPE html>
<html>
<head>
	<title>Đăng Ký</title>
	<style type="text/css">
		.err{
			color:red;
		}
	</style>
</head>
<body>
	<?php
	$errorName=$errorPass="";
	if (isset($_POST['submit'])) {
		if ($_POST['num1']  == "") {
				$errorName="Vui Lòng  Số thứ 1";
		}else{
			$errorName="";
		}
		if ($_POST['num2'] =="") {
				$errorPass="Vui Lòng Số  Thứ 2 ";
		}else{
			$errorPass="";
		}
		echo intval($_POST['num1'])+intval($_POST['num2']) ;
		
	}
	
	?>
	<h1>Đăng Ký</h1>
	<form method="post" action="#" name ='dangky'>
		<p>Số 1 <input type="number" name="num1" ></p>
		<p class=err><?php echo $errorName; ?></p>
		<p>Số 2 <input type="number" name="num2"></p>
		<p class=err><?php echo $errorPass; ?></p>
		<input type='submit' name="submit">
	</form>
</body>
</html>