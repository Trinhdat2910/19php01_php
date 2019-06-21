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
	$errorten=$erroremail=$errortel=$errorgt=$errorqq=$errorns="";
	if (isset($_POST['submit'])) {
		if ($_POST['ten']  == "") {
				$errorten="Vui Lòng nhập tên";
		}else{
			$errorten="";
		}
		if ($_POST['email'] =="") {
				$erroremail="Vui Lòng nhập email ";
		}else{
			$erroremail="";
		}
		if ($_POST['tel'] =="") {
				$errortel="Vui Lòng nhập tel ";
		}elseif(is_numeric($_POST['tel']) == 0){
			$errortel="Vui Lòng Nhập Kiểu Số";
		}
		else{
			$errortel="";
		}
		if (empty($_POST['gt']) ) {
				$errorgt="Vui Lòng chọn giới tính ";
		}else{
			$errorgt="";
		}
		
		if ($_POST['qq'] == 0 ) {
				$errorqq="Vui Lòng chọn Tỉnh ";
		}else{
			$errorqq="";
		}
		if ($_POST['ns'] =="") {
				$errorns="Vui Lòng nhập ngay sinh ";
		}else{
			$errorns="";
		}
		
	}
	
	?>
	<h1>Đăng Ký</h1>
	<form method="post" action="#" name ='dangky'>
		<p>Tên <input type="text" name="ten" value="<?php echo isset($_POST['ten']) ? $_POST['ten'] : '' ?>" /></p>
		<p class=err><?php echo $errorten; ?></p>
		<p>email<input type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"></p>
		<p class=err><?php echo $erroremail; ?></p>
		<p>Tel<input type="text" name="tel" value="<?php echo isset($_POST['tel']) ? $_POST['tel'] : '' ?>"></p>
		<p class=err><?php echo $errortel; ?></p>
		<p>Giới Tính<input type="radio" name="gt" value="Nam">Nam <input type="radio" name="gt"  value="Nữ"> Nữ</p>
		<p class=err><?php echo $errorgt; ?></p>
		<p>Quê Quán<select name='qq' value="<?php echo isset($_POST['qq']) ? $_POST['qq'] : '' ?>">
			<option value="0">Chọn Tỉnh</option>
			<option value="Quảng Nam">Quảng Nam</option>
			<option value="Đà Nẵng">Đà Nẵng</option>
		</select></p>
		<p class=err><?php echo $errorqq; ?></p>
		<p>Ngày Sinh<input type="date" name="ns" value="<?php echo isset($_POST['ns']) ? $_POST['ns'] : '' ?>"></p>
		<p class=err><?php echo $errorns; ?></p>
		<input type='submit' name="submit">
	</form>
</body>
</html>