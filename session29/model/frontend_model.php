<?php 
	include 'config/connect.php';

	class FrontendModel extends DBConnect {
		function register( $username, $password, $name, $email, $phone, $birthday, $avatar) {
		$created = date('Y-m-d h:i:s');
		$sql = "INSERT INTO user(role, username, password, name, email, phone, birthday, avatar, created) VALUES ('admin', '$username', '$password', '$name', '$email', '$phone', '$birthday', '$avatar', '$created')";
		return mysqli_query($this->connect(), $sql);
		}
		public function checkLogin($username, $password) {
			$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
			$listUser = mysqli_query($this->connect(), $sql);
			return $listUser;
		}
		public function listUser() {
			$sql = "SELECT * FROM user";
			$listUser = mysqli_query($this->connect(), $sql);
			return $listUser;
		}
		public function listProduct() {
			$sql = "SELECT * FROM product";
			$listProduct = mysqli_query($this->connect(), $sql);
			return $listProduct;
		}
	}
?>