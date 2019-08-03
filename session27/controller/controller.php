<?php 
	include 'model/model.php';
	class Controller {

		function handleRequest(){
			$model = new Model();
			$controller = isset($_GET['controller'])?$_GET['controller']:'home';
			$action = isset($_GET['action'])?$_GET['action']:'index';

			switch ($controller) {
				case 'home':
					# code...
					echo "Welcome HomePage";
					break;
				case 'user':
					# code...
					$this->handleUser($action, $model);
					break;
				case 'news':
					# code...
					$this->handleNews();
					break;
				case 'product':
					# code...
					break;
				
				default:
					# code...
					break;
			}
		}

		function handleUser($action, $model) {
			switch ($action) {
				case 'add_user':
					$this->checkLoginSession();
					# code...
					if (isset($_POST['add_user'])) {
						$username = $_POST['username'];
						$password = md5($_POST['password']);
						$name = $_POST['name'];
						$email = $_POST['email'];
						$tel = $_POST['tel'];
						$file_name=$_FILES['image']['name'];
					    $file_path=$_FILES['image']['tmp_name'];
					    $image="image/".$file_name;
					    $uploaded_file=move_uploaded_file($file_path,$image);
							
						if($model->addUser($username, $password, $image, $name, $email, $tel) === TRUE){
							header("Location: index.php?controller=user&action=list_user");
						}
						# code...
					}
					include 'view/user/add_user.php';
					break;
				case 'edit_user':
					$this->checkLoginSession();
					$id = $_GET['id'];
					$editUser =$model->getEditUser($id);
					if (isset($_POST['edit_user'])) {
						$username = $_POST['username'];
						$name = $_POST['name'];
						$email = $_POST['email'];
						$tel = $_POST['tel'];
						if ($_FILES['image']['name'] =='') {

							if($model->editUser1($username, $name, $email, $tel, $id) === TRUE){
								header("Location: index.php?controller=user&action=list_user");
							}
							
						}
						else
						{
							$file_name=$_FILES['image']['name'];
						    $file_path=$_FILES['image']['tmp_name'];
						    $image="image/".$file_name;
						    $uploaded_file=move_uploaded_file($file_path,$image);
							if($model->editUser($username, $image, $name, $email, $tel, $id) === TRUE){
								header("Location: index.php?controller=user&action=list_user");
							}
						}

						# code...
					}
					include 'view/user/edit_user.php';
					break;
				case 'list_user':
					$this->checkLoginSession();
					# code...
					$listUser = $model->listUser();
					include 'view/user/list_user.php';
					break;
				case 'delete_user':
					$this->checkLoginSession();
					$id = $_GET['id'];
					if($model->deleteUser($id) === TRUE){
						header("Location: index.php?controller=user&action=list_user");
					}
					break;
				case 'login':
					# code...
					if (isset($_POST['login'])) {
						$username = $_POST['username'];
						$password = md5($_POST['password']);
						$checkLogin = $model->checkLogin($username, $password);
						if($checkLogin -> num_rows > 0){

							$_SESSION['login'] = $username;
						
							header("Location: index.php?controller=user&action=list_user");
						} else {

							header("Location: index.php?controller=user&action=login");
						}
						# code...
					}
					include 'view/user/login.php';
					break;
				case 'logout':
					unset($_SESSION['login']);
					header("Location: index.php?controller=user&action=login");
					break;
				default:
					# code...
					break;
			}
		}

		function handleNews() {

		}

		function checkLoginSession() {
			if (!isset($_SESSION['login']) ) {
				header("Location: index.php?controller=user&action=login");
			}
		}
	}
?>