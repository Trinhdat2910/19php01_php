<?php 
	include 'config/connect.php';

	class BackendModel extends DBConnect {
		public function listUser() {
			$sql = "SELECT * FROM user";
			$listUser = mysqli_query($this->connect(), $sql);
			return $listUser;
		}
		public function deleteUser($id) {
			$sql = "DELETE FROM user WHERE id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		public function getEditUser($id) {
			$sql = "SELECT * FROM user where id ='$id'";
			$result = mysqli_query($this->connect(), $sql);
			return $result->fetch_assoc();
		}
		function editUser1($username,$name, $email, $phone, $birthday, $id) {
			$updated = date('Y-m-d h:i:s');
			$sql = "UPDATE user SET username ='$username', name= '$name', email ='$email', phone='$phone', birthday	='$birthday', updated='$updated' where id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		function editUser($username,$name, $email, $phone, $birthday, $image, $id) {
			$updated = date('Y-m-d h:i:s');
			$sql = "UPDATE user SET username ='$username',name= '$name', email ='$email', phone='$phone', birthday	='$birthday', avatar ='$image',  updated='$updated'where id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		public function listCategory() {
			$sql = "SELECT * FROM product_categories";
			$listCategory = mysqli_query($this->connect(), $sql);
			return $listCategory;
		}
		function AddProduct( $name, $description, $category, $image, $price) {
		$created = date('Y-m-d h:i:s');
		$sql = "INSERT INTO product( name, description, product_categories_id, image, price, created) VALUES ( '$name', '$description', '$category', '$image', '$price', '$created')";
		return mysqli_query($this->connect(), $sql);
		var_dump($sql);
		}
		public function listProduct() {
			$sql = "SELECT * FROM product";
			$listProduct = mysqli_query($this->connect(), $sql);
			return $listProduct;
		}
		public function deleteProduct($id) {
			$sql = "DELETE FROM product WHERE id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		public function getEditProduct($id) {
			$sql = "SELECT * FROM product where id ='$id'";
			$result = mysqli_query($this->connect(), $sql);
			return $result->fetch_assoc();
		}
		public function getCategory_id($id) {
			$sql = "SELECT * FROM product_categories where id ='$id'";
			$result = mysqli_query($this->connect(), $sql);
			return $result->fetch_assoc();
		}
		function editProduct1($name, $description,$category, $price, $id) {
			$updated = date('Y-m-d h:i:s');
			$sql = "UPDATE product SET name ='$name', description= '$description', product_categories_id ='$category', price='$price', updated='$updated' where id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		function editProduct($name, $description,$category, $price,$image, $id) {
			$updated = date('Y-m-d h:i:s');
			$sql = "UPDATE product SET name ='$name', description= '$description', product_categories_id ='$category', price='$price',image='$image', updated='$updated' where id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
	}
?>