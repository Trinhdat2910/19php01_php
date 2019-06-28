<?php 
	 $tenmaychu='localhost';
      $tentaikhoan='root';
      $pass='';
      $csdl='example';
      $connect= mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('không kết nối được');
      
      mysqli_select_db($connect, $csdl)or die("cannot select DB");
 ?>