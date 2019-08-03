<?php 
  class DBConnect {

  	private $server = 'localhost';
		private $username = 'root';
		private $password = '';
		private $database = 'example';

		protected function connect() {
			$connect = mysqli_connect($this->server, $this->username, $this->password, $this->database);
			mysqli_set_charset($connect,"utf8");
			if ($connect === FALSE) {
				echo "Connect fail ".mysqli_connect_error();
			}
			return $connect;
		}
	}
?>