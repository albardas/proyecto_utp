<?php 
	namespace CONTROLLERS;
	
	use MODELS\special as special;

	class specialController
	{
	
		public $id;
		

		public function __construct(){
			$this->special = new special();
		}

		public function index(){
								
		}

		public function add(){
			if ($_POST) {
				error_log("------");
				error_log(print_r($_POST, true));
				return false;
				$this->special->set("id_user", $_POST['id_user']);
				$this->special->set("name", $_POST['name']);
				$this->special->set("last_name", $_POST['last_name']);
				$this->special->set("email", $_POST['email']);
				$this->special->set("phone", $_POST['phone']);
				$this->special->set("gender", $_POST['gender']);
				$this->special->set("city", $_POST['city']);
				$this->special->set("company", $_POST['company']);
				$this->special->set("position", $_POST['position']);
				$this->special->set("status", 0);
				$this->special->set("date", date("Y/m/d"));
				$this->special->set("time", date("h:i:sa"));
				$this->special->set("description", $_POST['description']);
				$this->special->save();
			}
							
		}

		public function edit(){
								
		}

		public function delete(){
								
		}

		public function activateAssistance(){
								
		}

		public function activateRepresentation(){
								
		}

	
	}

	$special = new specialController;

 ?>	

