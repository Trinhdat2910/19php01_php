<?php 
	/**
	 * 
	 */
	include 'config/connectDB.php';
	class Model
	{
		
		public function getNews()
		{
			$news ='đũy lỳ';
			return $news;
		}
		public function getHomePage()
		{
			$home ='21';
			return $home;
		}
		public function getProductsPage()
		{
			$productlist ='list product here';
			return $productlist;
		}

		public function getProductsDetail($id) {
			$productsDetail = 'Chi tiet san pham '.$id;
			return $productsDetail;
		}
	}
?>