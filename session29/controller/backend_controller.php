<?php 
	/**
	 * 
	 */
	include 'model/backend_model.php';
	class BackendController
	{
		function handleRequest()
		{
			$this-> checkLoginSession();
			$controller = isset($_GET['controller'])?$_GET['controller']:'home';
			$action = isset($_GET['action'])?$_GET['action']:'admin';

			switch ($controller) {

				case 'home':
							
					break;
				
				case 'user':
					# code...
					$model = new BackendModel();
					$this->handleUser($action, $model);
					break;
				case 'product':
					# code...
					$model = new BackendModel();
					$this->handleProduct($action, $model);
					break;
				case 'comment':
					# code...
					$model = new BackendModel();
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
				case 'list_user':
				
					$listUser = $model->listUser();
					include 'view/users/list_user.php';
				break;
				case 'delete_user':
					$id = $_GET['id'];
					if($model->deleteUser($id) === TRUE){
						header("Location: admin.php?controller=user&action=list_user");
					}
					break;
				case 'edit_user':
					
					$id = $_GET['id'];
					$editUser =$model->getEditUser($id);
					if (isset($_POST['edit_user'])) {
						$username = $_POST['username'];
						$name = $_POST['name'];
						$email = $_POST['email'];
						$phone = $_POST['phone'];
						$birthday = date('Y-m-d', strtotime($_POST['birthday']));
						if ($_FILES['avatar']['name'] =='') {

							if($model->editUser1($username,$name, $email, $phone, $birthday, $id) === TRUE){
								header("Location: admin.php?controller=user&action=list_user");
							}
							
						}
						else
						{
							$file_name=$_FILES['avatar']['name'];
						    $file_path=$_FILES['avatar']['tmp_name'];
						    $image="webroot/admin/upload/user/".$file_name;
						    $uploaded_file=move_uploaded_file($file_path,$image);
							if($model->editUser($username, $name, $email, $phone, $birthday, $image, $id) === TRUE){
								header("Location: admin.php?controller=user&action=list_user");
							}
						}

						# code...
					}
					include 'view/users/edit_user.php';
					break;
				default:

				break;
			}
		}
		function handleProduct($action, $model) 
		{

			switch ($action) {
				case 'add_product':
					$listCategory = $model->listCategory();
					if (isset($_POST['add_product'])) {
						$name = $_POST['product_name'];
						$category = $_POST['category'];
						$description = $_POST['description'];
						$price = $_POST['price'];
						$image = 'default.png';
						$pathUpload = 'webroot/admin/upload/product/';
							if ($_FILES['image']['error'] == 0) {
								move_uploaded_file($_FILES['image']['tmp_name'], $pathUpload.$_FILES['image']['name']);
								$image = $pathUpload.$_FILES['image']['name'];
							}
							// save vao database
							
							if ($model->AddProduct($name, $description,$category, $image, $price) === TRUE) {
								header("Location: admin.php?controller=product&action=list_product");
							}

					}
					include 'view/products/add_product.php';
				break;
				case 'list_product':
				
					$listProduct = $model->listProduct();
					include 'view/products/list_product.php';
				break;
				case 'edit_product':
					$id = $_GET['id'];
					$listCategory = $model->listCategory();
					$editProduct =$model->getEditProduct($id);
					$Category_id= $model->getCategory_id($editProduct['product_categories_id']);
					if (isset($_POST['edit_product'])) {
						$name = $_POST['product_name'];
						$category = $_POST['category'];
						$description = $_POST['description'];
						$price = $_POST['price'];
						if ($_FILES['image']['name'] =='') {

							if($model->editProduct1($name, $description,$category, $price, $id) === TRUE){
								header("Location: admin.php?controller=product&action=list_product");
							}
							
						}
						else
						{
							$file_name=$_FILES['image']['name'];
						    $file_path=$_FILES['image']['tmp_name'];
						    $image="webroot/admin/upload/product/".$file_name;
						    $uploaded_file=move_uploaded_file($file_path,$image);
							if($model->editProduct($name, $description,$category, $price, $image, $id) === TRUE){
								header("Location: admin.php?controller=product&action=list_product");
							}
						}

						# code...
					}
					include 'view/products/edit_product.php';
				break;
				case 'delete_product':
					$id = $_GET['id'];
					if($model->deleteProduct($id) === TRUE){
						header("Location: admin.php?controller=product&action=list_product");
					}
					break;
				default:

				break;
			}
		}
		function handleComment($action, $model) 
		{
			switch ($action) {
				case 'list_comment':
					$listComment = $model->listComment();
					include 'view/comment/list_comment.php';
					break;
				case 'show_comment':
					$id = $_GET['id'];
					if($model->showComment($id) === TRUE){
								header("Location: admin.php?controller=comment&action=list_comment");
							}
					break;
				case 'hide_comment':
					$id = $_GET['id'];
					if($model->hideComment($id) === TRUE){
								header("Location: admin.php?controller=comment&action=list_comment");
							}
					break;
				case 'delete_comment':
					$id = $_GET['id'];
					if($model->deleteComment($id) === TRUE){
								header("Location: admin.php?controller=comment&action=list_comment");
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