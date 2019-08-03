<?php 
	include 'config/connect.php';

	class Model extends DBConnect {

		function addUser($username, $password, $image, $name, $email, $tel) {
			$sql = "INSERT INTO users(username, password, Avatar, email, name, tel) VALUES ('$username', '$password', '$image', '$email', '$name', '$tel')";
			return mysqli_query($this->connect(), $sql);
		}
		function editUser1($username, $name, $email, $tel, $id) {
			$sql = "UPDATE users SET username ='$username' , name='$name', email ='$email', tel='$tel' where id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		function editUser($username,$image, $name, $email, $tel, $id) {
			$sql = "UPDATE users SET username ='$username' , name='$name', email ='$email', tel='$tel', Avatar ='$image' where id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		public function deleteUser($id) {
			$sql = "DELETE FROM users WHERE id ='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		public function listUser() {
			$sql = "SELECT * FROM users";
			$listUser = mysqli_query($this->connect(), $sql);
			return $listUser;
		}
		public function getEditUser($id) {
			$sql = "SELECT * FROM users where id ='$id'";
			$result = mysqli_query($this->connect(), $sql);
			return $result->fetch_assoc();
		}

		public function checkLogin($username, $password) {
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$listUser = mysqli_query($this->connect(), $sql);
			return $listUser;
		}
	}
?>