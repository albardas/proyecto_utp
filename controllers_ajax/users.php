<?php 
session_start();
$conn = new PDO('mysql:host=localhost;dbname=registry; charset=utf8','root','');
$data = Array();
switch ($_GET['op']) {
	case 'listar':
		$sql = "SELECT * FROM users";
		$rspta = $conn->prepare($sql);
		$rspta->execute();
		if (!$rspta) {
			echo json_encode([
					"success" => false,
					'msg'=> 'Algo va mal intenta mas tarde',
				]);
		}else{
			while ($reg = $rspta->fetch(PDO::FETCH_OBJ)) {
				
				$data[]=array(

					"0"=>$reg->name,
		 			"1"=>$reg->last_name,
		 			"2"=>$reg->email,
		 			"3"=>$reg->phone,
		 			"4"=>$reg->password,
		 			"5"=>'<button class="btn btn-warning btn-sm" onclick="edit('.$reg->id.')">Editar</button>
						<button class="btn btn-danger btn-sm" onclick="eliminar('.$reg->id.')">Eliminar</button>'
				);
			}
			$results = array(
					"sEcho"=>1, 
					"iTotalRecords"=>count($data), 
					"iTotalDisplayRecords"=>count($data), 
					"aaData"=>$data
				);
			echo json_encode($results);
		}	
	break;
	
	case 'create':
		$name=$_POST['name'];
		$last_name=$_POST['last_name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$password=$_POST['password'];
		$sql = "INSERT INTO users (`name`, `last_name`, `email`, `password`, `phone`) VALUES ('$name', '$last_name', '$email', '$password', '$phone')";
		$rspta = $conn->prepare($sql);
		$rspta->execute();
		if ($rspta) {
			$response=['success'=>true,'msg'=>'Usuario dado de alta'];
		}else{
			$response=['success'=>false,'msg'=>'Fallo el registro, intenta mas tarde'];
		}
		echo json_encode($response);
	break;

	case 'edit':
		$id = $_POST['id'];
		$sql = "SELECT * FROM users WHERE id = '$id' ";
		$rspta = $conn->prepare($sql);
		$rspta->execute();
		$user_fila = $rspta->fetch(PDO::FETCH_OBJ);
		echo json_encode($user_fila);
	break;

	case 'update':
		$id = $_POST['id'];
		$name=$_POST['name'];
		$last_name=$_POST['last_name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$password=$_POST['password'];
		$sql = "UPDATE  users SET `name`='$name', `last_name`='$last_name', `email`='$email', `password`='$password', `phone`='$phone' WHERE id = '$id' ";
		$rspta = $conn->prepare($sql);
		$rspta->execute();
		if ($rspta) {
			$response=['success'=>true,'msg'=>'Usuario actualizado'];
		}else{
			$response=['success'=>false,'msg'=>'Fallo la actualizacion, intenta mas tarde'];
		}
		echo json_encode($response);
	break;

	case 'delete':
		$id = $_POST['id'];
		$sql = "DELETE FROM users WHERE id = '$id' ";
		$rspta = $conn->prepare($sql);
		$rspta->execute();
		if ($rspta) {
			$response=['success'=>true,'msg'=>'Usuario dado de baja'];
		}else{
			$response=['success'=>false,'msg'=>'Fallo la baja, intenta mas tarde'];
		}
		echo json_encode($response);
	break;

	case 'login':
		$name = $_POST['name'];
		$password = $_POST['password'];
		$sqlAuth = "SELECT * FROM users WHERE name = '$name' && password = '$password' ";
		$resultAuth = $conn->prepare($sqlAuth);
		$resultAuth->execute();
		$filas = $resultAuth->rowCount();
		if ($filas>0) {
			$datos_user = $resultAuth->fetch(PDO::FETCH_OBJ);
			$_SESSION['id_user']= $datos_user->id;
			$_SESSION['name']= $datos_user->name;
			$_SESSION['email']= $datos_user->email;
			$response=['success'=>true];
		}else{
			$response=['success'=>false,'msg'=>'EL usuario o la contraseña son incorrectos'];
		}
		echo json_encode($response);
	break;


}


?>