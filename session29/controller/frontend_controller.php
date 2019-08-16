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
						$this->handleHome($action, $model);
					break;
				
				case 'user':
					# code...
					$model = new FrontendModel();
					$this->handleUser($action, $model);
					break;
				case 'comment':
					# code...
					$model = new FrontendModel();
					$this->handleComment($action, $model);
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
								$getLogin= $checkLogin->fetch_assoc();
								$login['name']=$getLogin['name'];
								$login['role']=$getLogin['role'];
								$login['image']=$getLogin['avatar'];
								$login['username']=$username;
								$_SESSION['login'] = $login;
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
						$getLogin= $checkLogin->fetch_assoc();
						$login['name']=$getLogin['name'];
						$login['role']=$getLogin['role'];
						$login['image']=$getLogin['avatar'];
						$login['id']=$getLogin['id'];
						$login['username']=$username;

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
		function handleHome($action, $model) 
		{
			switch ($action) {
				case 'detail_product':
					$id = $_GET['id'];
					$getProduct= $model->getProduct($id);
					$getListComment= $model->getListComment($id);
					include 'view/home/detail_product.php';
				break;


				default:
					$model = new FrontendModel();
					$listProduct = $model->listProduct();
					
					
					include 'view/home/contentHome.php';	# code...
				break;
			}

		}
		function handleComment($action, $model) 
		{
			switch ($action) {
				case 'send_comment':
					$id_product = $_GET['id'];
					$id_user = $_SESSION['login']['id'];
					if (isset($_POST['send_comment'])) {
						$content = $_POST['content'];
						if($model->sendComment( $id_product, $id_user, $content)===TRUE){
							header("Location: index.php?controller=home&action=detail_product&id=$id_product");
						}
					}

					
				break;


				default:
					
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