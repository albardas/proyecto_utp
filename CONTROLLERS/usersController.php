<?php 
	namespace CONTROLLERS;
	
	use MODELS\users as users;

	class usersController
	{
	
		public $id;
		

		public function __construct(){
			$this->users = new users();
		}

		public function index(){
			echo "hola";
		}


		public function add(){
								
		}

		public function edit(){
								
		}

		public function delete(){
								
		}

	
	}

	$users = new usersController;

 ?>	

