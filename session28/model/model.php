<?php 
	include 'config/connect.php';

	class Model extends DBConnect {

		function Register($username, $password, $image) {
			$sql = "INSERT INTO users(username, password, avatar) VALUES ('$username', '$password', '$image')";
			return mysqli_query($this->connect(), $sql);
		}
		function editUser1($username, $id) {
			$sql = "UPDATE users SET username ='$username' where id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		function editUser($username,$image, $id) {
			$sql = "UPDATE users SET username ='$username', avatar ='$image' where id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		public function deleteUser($id) {
			$sql = "DELETE FROM users WHERE id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		public function deleteProduct($id) {
			$sql = "DELETE FROM products WHERE id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		public function listUser() {
			$sql = "SELECT * FROM users";
			$listUser = mysqli_query($this->connect(), $sql);
			return $listUser;
		}
		public function listProduct() {
			$sql = "SELECT * FROM products";
			$listProduct = mysqli_query($this->connect(), $sql);
			return $listProduct;
		}
		public function getCategory() {
			$sql = "SELECT * FROM product_categories";
			$listCategory = mysqli_query($this->connect(), $sql);
			return $listCategory;
		}
		function addProduct($tittle, $description, $image, $category, $price) {
			$sql = "INSERT INTO products(tittle, description, image, category_id, price) VALUES ('$tittle', '$description', '$image', '$category', '$price')";
			return mysqli_query($this->connect(), $sql);
		}
		public function getEditUser($id) {
			$sql = "SELECT * FROM users where id ='$id'";
			$result = mysqli_query($this->connect(), $sql);
			return $result->fetch_assoc();
		}
		public function getEditProduct($id) {
			$sql = "SELECT * FROM products where id ='$id'";
			$result = mysqli_query($this->connect(), $sql);
			return $result->fetch_assoc();
		}
		function editProduct1($tittle, $description, $category, $price, $id) {
			$sql = "UPDATE products SET tittle ='$tittle', description='$description', category_id='$category', price ='$price' where id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		function editProduct($tittle,$description, $category, $price, $image ,$id) {
			$sql = "UPDATE products SET tittle ='$tittle', description='$description', category_id='$category', price ='$price', image='$image' where id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}


		public function checkLogin($username, $password) {
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$listUser = mysqli_query($this->connect(), $sql);
			return $listUser;
		}
	}
?>