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
		public function getProduct($id) {
			$sql = "SELECT * FROM product where id ='$id'";
			$result = mysqli_query($this->connect(), $sql);
			return $result->fetch_assoc();
		}
		function sendComment( $id_product, $id_user, $content) {
		$created = date('Y-m-d h:i:s');
		$sql = "INSERT INTO comment(product_id, user_id, content, created, status) VALUES ( '$id_product', '$id_user', '$content', '$created', '0')";
		return mysqli_query($this->connect(), $sql);
		}
		public function getListComment($id) {
			$sql = "SELECT * FROM comment WHERE product_id= '$id' and status ='1'";
			$getListComment = mysqli_query($this->connect(), $sql);
			return $getListComment;
		}
		public function getUserComment($id) {
			$sql = "SELECT * FROM user WHERE id = '$id'";
			$result = mysqli_query($this->connect(), $sql);
			return $result->fetch_assoc();
		}
	}
?>