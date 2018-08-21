<?php namespace Config;

	
	class Enrutador
	{
	 	public static function run(Request $request){
	 		$controlador = $request->getControlador() . "Controller";
	 		$ruta = ROOT . "CONTROLLERS" .DS . $controlador.".php";
	 		//error_log($ruta);
	 		
	 		$metodo = $request->getMetodo();
			if ($metodo == "index.php") {
				$metodo = "index";	 
			}		

	 		$argumento = $request->getArgumento();
	 		if (is_readable($ruta)) {
				//error_log($ruta);

	 			require_once $ruta;
	 			$mostrar = "CONTROLLERS\\".$controlador;
		 		$controlador = new $mostrar;
		 		//error_log($mostrar);

	 			if (!isset($argumento)) {
	 				$datos = call_user_func(array($controlador, $metodo));
	 				

	 			}else{
	 				$datos = call_user_func_array(array($controlador, $metodo), $argumento);
	 				//error_log(print_r($datos,true));

	 			}
	 		}

	 		//CARGAR VISTA
	 		$ruta = ROOT . "VIEWS" . DS . $request->getControlador() . DS . $request->getMetodo() . ".php";
	 		//print $ruta;
	 		if (is_readable($ruta)) {
	 			//error_log("la ruta".$ruta);
	 			require_once $ruta;
	 		}else{
	 			print "no se arma";
	 		}


	 	}
	}	 

?>