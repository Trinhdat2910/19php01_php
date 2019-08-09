<?php
include 'model/model.php';
	class Controller {

		function handleRequest(){
			$model = new Model();
			$controller = isset($_GET['controller'])?$_GET['controller']:'home';
			$action = isset($_GET['action'])?$_GET['action']:'index';

			switch ($controller) {

				case 'home':
					$listProduct = $model->listProduct();	
					include 'view/index/home.php';
					break;
				
							
				default:
					# code...
					break;
			}
		}
	}
?>