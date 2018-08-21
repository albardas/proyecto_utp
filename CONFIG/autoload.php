<?php 	namespace Config;

	class autoload{
		public static function run()
		{
			spl_autoload_register(
				function($class){

					$ruta = str_replace("\\","/" , $class) . ".php";
					//error_log(print($ruta));
					include_once $ruta;
			});
		}
	}
 ?>