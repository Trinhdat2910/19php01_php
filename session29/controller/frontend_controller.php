<?php 
	/**
	 * 
	 */
	include 'model/frontend_model.php';
	class FrontendController
	{
		
		function handleRequest()
		{
			
			$controller = isset($_GET['controller'])?$_GET['controller']:'home';
			$action = isset($_GET['action'])?$_GET['action']:'home';

			switch ($controller) {

				case 'home':
					$model = new FrontendModel();
					$listProduct = $model->listProduct();
					include 'view/home/contentHome.php';	
					break;
				
				case 'user':
					# code...
					$model = new FrontendModel();
					$this->handleUser($action, $model);
					break;
				case 'product':
					# code...
					// $this->handleProduct($action, $model);
					break;
				
				default:
					# code...
					break;
			}
		}
		function handleUser($action, $model) 
		{
			switch ($action) {
				case 'register':
					if (isset($_POST['register'])) {
						$username = $_POST['username'];
						$name = $_POST['name'];
						$password = md5($_POST['password']);
						$email = $_POST['email'];
						$phone = $_POST['phone'];
						$birthday = date('Y-m-d', strtotime($_POST['birthday']));
						$avatar = 'default.png';
						$pathUpload = 'webroot/admin/upload/user/';
							if ($_FILES['avatar']['error'] == 0) {
								move_uploaded_file($_FILES['avatar']['tmp_name'], $pathUpload.$_FILES['avatar']['name']);
								$avatar = $pathUpload.$_FILES['avatar']['name'];
							}
							// save vao database
							$model = new FrontendModel();
							if ($model->register( $username, $password, $name, $email, $phone, $birthday, $avatar) === TRUE) {
								// Dang nhap luon, sau khi dang ky thanh cong
								$_SESSION['login'] = $username;
								header("Location: index.php");
							}
					}
				include 'view/users/register.php';
				break;
				case 'login':
				
				$model = new FrontendModel();
				if (isset($_POST['login'])) {
					$username = $_POST['username'];
					$password = md5($_POST['password']);
					$checkLogin = $model->checkLogin($username, $password);
					if($checkLogin -> num_rows > 0){

						$_SESSION['login'] = $login;


						
						header("Location: index.php");
					} else {

						header("Location: index.php?controller=user&action=login");
					}
						# code...
				}
				include 'view/users/login.php';
				break;
				case 'logout':
				
				unset($_SESSION['login']);
				header("Location: index.php");
				break;


				default:
						# code...
				break;
			}
		}
		function checkLoginSession() {
			if (!isset($_SESSION['login']) ) {
				header("Location: index.php?controller=user&action=login");


			}
		}
	}
?>