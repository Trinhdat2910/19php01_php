<?php 
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='example';
	$connect= mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('không kết nối được');
	
	mysqli_select_db($connect, $csdl)or die("cannot select DB");
	$name='dat';
	$email='dat';
	$password='dat';
	$address='quangnam';
	$phone='08978673';
	$sql="INSERT INTO nguoidung(name, email, password, address, phone) VALUES ($name, $email, $password, $address, $phone)";
	if(mysqli_query($connect, $sql) === true){
		echo"theem thành công";
	}
	else{
		echo"khoong thanhf coong";
			}


 ?>