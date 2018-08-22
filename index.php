<?php 
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);

	define('URL', "http://localhost/proyecto_utp/");
	define('URL_IMG', URL."VIEWS/resources/IMG/");

	require_once "CONFIG/autoload.php";
	require_once "VIEWS/template.php";

	CONFIG\autoload::run();

	CONFIG\enrutador::run(new CONFIG\request());
	//COMENTARIO DE PRUEBA

 ?>