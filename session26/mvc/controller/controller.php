<?php 
	/**
	 * 
	 */
	include 'model/model.php';
	class Controller
	{
		
		public function handleRequest()
		{
			$model =new Model();
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					
					$home = $model -> getHomePage();
					include 'view/home/home.php';
					break;
				case 'news':
					$showNews = $model -> getNews();
					include 'view/news/news.php';
					break;
				case 'products':
					$showProducts = $model -> getProductsPage();
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