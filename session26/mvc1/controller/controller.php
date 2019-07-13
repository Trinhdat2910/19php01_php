<?php 
	/**
	 * 
	 */
	include 'model/model.php';
	include 'libs/function.php';
	class Controller
	{
		
		public function handleRequest()
		{
			$model =new Model();
			$functionCommon = new FunctionCommon();
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					
					$home = $model -> getHomePage();
					include 'view/home/home.php';
					break;
				case 'news':
					$newList = $model -> getNews();
					include 'view/news/news.php';
					break;
				case 'update_news':
					$id = $_GET['id'];
					$editNews =$model->getUpdateNews($id);
					if (isset($_POST['update_news_form'])) {
						if ($_FILES['image']['name'] =='') {
							$title = $_POST['title'];
							$content = $_POST['content'];
														
						// save vao database
						if ($model->updateNews1($id, $title, $content ) === TRUE) {
							$functionCommon->redirectPage('index.php?action=news');
							}
						}else{
							$title = $_POST['title'];
							$content = $_POST['content'];
							$file_name=$_FILES['image']['name'];
					        $file_path=$_FILES['image']['tmp_name'];
					        $image="image/".$file_name;
					        $uploaded_file=move_uploaded_file($file_path,$image);
							
						// save vao database
						if ($model->updateNews($id, $title, $content, $image ) === TRUE) {
							$functionCommon->redirectPage('index.php?action=news');
							}
						}
							
					}
					include 'view/news/updatenews.php';
					break;
				case 'addnews':
				if (isset($_POST['add_news'])) {
						if ($_FILES['image']['name'] =='') {
							$title = $_POST['title'];
							$content = $_POST['content'];
							$image ='image/default.jpg';
							$createat = date('Y-m-d h:i:s');
							
						// save vao database
						if ($model->addNews($title, $content, $image ,$createat) === TRUE) {
							$functionCommon->redirectPage('index.php?action=news');
							}
						}
						else{
							$title = $_POST['title'];
							$content = $_POST['content'];
							$file_name=$_FILES['image']['name'];
					        $file_path=$_FILES['image']['tmp_name'];
					        $image="image/".$file_name;
					        $uploaded_file=move_uploaded_file($file_path,$image);
							$createat = date('Y-m-d h:i:s');
						// save vao database
						if ($model->addNews($title, $content, $image ,$createat) === TRUE) {
							$functionCommon->redirectPage('index.php?action=news');
							}
						}
						
						}
						include 'view/news/addnews.php';
						break;
				case 'delete_news':
				   // lay id cua san pham can xoa
					$id = $_GET['id'];
					// goi model thuc hien xoa san pham
					if ($model->deleteNews($id) === TRUE) {
						//header("Location: "index.php?action=products);
						$functionCommon->redirectPage('index.php?action=news');
					}
					break;
				case 'products':
					$productList = $model -> getProductsPage();
					include 'view/products/products.php';
					
					break;

				case 'contact':

					include 'view/contact/contact.php';
					break;
				case 'detailproducts':
					// lay id cua san pham chi tiet
					$id = $_GET['id'];
					// goi model xu ly du lieu
					$productsDetail = $model->getProductsDetail($id);
					// goi view products
					include 'view/products/detailproducts.php';
					break;
				
				default:
					# code...
					break;
			}

		}
	}
?>