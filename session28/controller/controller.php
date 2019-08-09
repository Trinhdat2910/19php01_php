<?php 
	include 'model/model.php';
	class Controller {

		function handleRequest(){
			$model = new Model();
			$controller = isset($_GET['controller'])?$_GET['controller']:'home';
			$action = isset($_GET['action'])?$_GET['action']:'admin';

			switch ($controller) {

				case 'home':
					$this->checkLoginSession();
					include 'view/admin/home.php';			
					break;
				
				case 'user':
					# code...
					$this->handleUser($action, $model);
					break;
				case 'product':
					# code...
					$this->handleProduct($action, $model);
					break;
				
				default:
					# code...
					break;
			}
		}

		function handleUser($action, $model) {
			switch ($action) {
				case 'register':
					if (isset($_POST['register'])) {
						$username = $_POST['username'];
						$password = md5($_POST['password']);
						$file_name=$_FILES['avatar']['name'];
					    $file_path=$_FILES['avatar']['tmp_name'];
					    $image="webroot/admin/upload/image/".$file_name;
					    $uploaded_file=move_uploaded_file($file_path,$image);
							
						if($model->Register($username, $password, $image) === TRUE){
							header("Location: admin.php?controller=user&action=login");
						}
						# code...
					}
					include 'view/admin/user/register.php';
					break;
				case 'edit_user':
					$this->checkLoginSession();
					$id = $_GET['id'];
					$editUser =$model->getEditUser($id);
					if (isset($_POST['edit_user'])) {
						$username = $_POST['username'];
						if ($_FILES['avatar']['name'] =='') {

							if($model->editUser1($username, $id) === TRUE){
								header("Location: admin.php?controller=user&action=list_user");
							}
							
						}
						else
						{
							$file_name=$_FILES['avatar']['name'];
						    $file_path=$_FILES['avatar']['tmp_name'];
						    $image="webroot/admin/upload/image/".$file_name;
						    $uploaded_file=move_uploaded_file($file_path,$image);
							if($model->editUser($username, $image, $id) === TRUE){
								header("Location: admin.php?controller=user&action=list_user");
							}
						}

						# code...
					}
					include 'view/admin/user/edit_user.php';
					break;
				case 'list_user':
					$this->checkLoginSession();
					# code...
					$listUser = $model->listUser();
					include 'view/admin/user/list_user.php';
					break;
					
				case 'delete_user':
					$id = $_GET['id'];
					if($model->deleteUser($id) === TRUE){
						header("Location: admin.php?controller=user&action=list_user");
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
							
							header("Location: admin.php");
						} else {

							header("Location: admin.php?controller=user&action=login");
						}
						# code...
					}
					include 'view/admin/user/login.php';
					break;
				case 'logout':
					unset($_SESSION['login']);
					header("Location: admin.php?controller=user&action=login");
					break;
				default:
					# code...
					break;
			}
		}

		function handleProduct($action, $model) {
			switch ($action) {
				case 'add_product':
					$this->checkLoginSession();
					$getCategory = $model->getCategory();
					if (isset($_POST['add_product'])) {
						$tittle = $_POST['tittle'];
						$description = $_POST['description'];
						$category = $_POST['category'];
						$price = $_POST['price'];
						$file_name=$_FILES['image']['name'];
					    $file_path=$_FILES['image']['tmp_name'];
					    $image="webroot/admin/upload/image/".$file_name;
					    $uploaded_file=move_uploaded_file($file_path,$image);
						
						if($model->addProduct($tittle, $description, $image, $category, $price) === TRUE){
							
							header("Location: admin.php?controller=product&action=list_product");
						}
						# code...
					}
					include 'view/admin/product/add_product.php';
					break;
				case 'edit_product':
					$this->checkLoginSession();
					$id = $_GET['id'];
					$editProduct =$model->getEditProduct($id);
					$getCategory = $model->getCategory();
					if (isset($_POST['edit_product'])) {
						$tittle = $_POST['tittle'];
						$description = $_POST['description'];
						$category = $_POST['category'];
						$price = $_POST['price'];
						if ($_FILES['image']['name'] =='') {

							if($model->editProduct1($tittle,$description, $category, $price, $id) === TRUE){
								header("Location: admin.php?controller=product&action=list_product");
							}
							
						}
						else
						{
							$file_name=$_FILES['image']['name'];
						    $file_path=$_FILES['image']['tmp_name'];
						    $image="webroot/admin/upload/image/".$file_name;
						    $uploaded_file=move_uploaded_file($file_path,$image);
							if($model->editProduct($tittle,$description, $category, $price, $image, $id) === TRUE){
								header("Location: admin.php?controller=product&action=list_product");
							}
						}

						# code...
					}
					include 'view/admin/product/edit_product.php';
					break;
				case 'list_product':
					$this->checkLoginSession();
					# code...
					$listProduct = $model->listProduct();
					include 'view/admin/product/list_product.php';
					break;
					
				case 'delete_product':
					$id = $_GET['id'];
					if($model->deleteProduct($id) === TRUE){
						header("Location: admin.php?controller=product&action=list_product");
					}
					break;
							
				default:
					# code...
					break;
			}
		}

		function checkLoginSession() {
			if (!isset($_SESSION['login']) ) {
				header("Location: admin.php?controller=user&action=login");


			}
		}
	}
?>