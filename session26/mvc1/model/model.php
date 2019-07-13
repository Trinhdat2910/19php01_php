<?php 
	/**
	 * 
	 */
	include 'config/ConnectDB.php';
	class Model extends ConnectDB
	{
		
		public function getNews()
		{
			$sql = "SELECT * FROM news";
			$newList = mysqli_query($this->connect(), $sql);
			return $newList;
		}
		public function addNews($title, $content, $image, $createat)
		{
			$sql = "INSERT INTO news(title, content, image, createat) VALUES ('$title', '$content', '$image', '$createat')";
			return mysqli_query($this->connect(), $sql);
		}
		public function updateNews($id, $title, $content, $image)
		{

			$sql = "UPDATE news set title = '$title', content='$content', image='$image' where id='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		public function updateNews1($id, $title, $content)
		{

			$sql = "UPDATE news set title = '$title', content='$content' where id='$id'";
			return mysqli_query($this->connect(), $sql);
		}
		public function getUpdateNews($id)
		{			
			$sql = "SELECT * FROM news WHERE id = $id";
			$result = mysqli_query($this->connect(), $sql);
			return $result->fetch_assoc();
		}
		public function deleteNews($id) {
			$sql = "DELETE FROM news WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
		public function getHomePage()
		{
			$home ='21';
			return $home;
		}
		

		public function getProductsDetail($id) {
			$productsDetail = 'Chi tiet san pham '.$id;
			return $productsDetail;
		}
		public function getProductsPage() {
			$sql = "SELECT * FROM product";
			$productList = mysqli_query($this->connect(), $sql);
			return $productList;
		}
	}
?>