<?php 
	/**
	 * 
	 */
	class User
	{
		public $name, $email, $pass, $phone, $address;

		
		private function Add()
		{
			echo "add";
		}
		function Edit()
		{
			echo "edit";
		}
		function Register()
		{
			echo "register";
		}
		function View()
		{
			echo "view";
		}
		private function List()
		{
			echo "list";
		}
		function Login()
		{
			echo "login";
		}
	}
	$user= new User();
	$user->Add();
?>