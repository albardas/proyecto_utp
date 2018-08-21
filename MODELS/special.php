<?php 
	namespace MODELS;

	class special 
	{

		public $id, $id_user, $name, $last_name, $email, $phone, $gender, $city, $company, $position, $status, $representative, $date, $time, $description; 

		public function __construct(){
			$this->con = new conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		
		public function get($atributo){
			return $this->$atributo;
		}

		public function list(){
			
		}
		public function save()
		{
			$sql = "INSERT INTO special_assitans (id, id_user, name, last_name, email, phone, gender, city, company, position, status, representative, date, time, description) VALUES (
										'',
										'1',
										'{$this->name}',
										'{$this->last_name}',
										'{$this->email}',
										'{$this->phone}',
										'{$this->gender}',
										'{$this->city}',
										'{$this->company}',
										'{$this->position}',
										'{$this->status}',
										'{$this->representative}',
										'{$this->date}',
										'{$this->time}',
										'{$this->description}')";
			$this->con->consultaSimple($sql);

		}

	}


 ?>