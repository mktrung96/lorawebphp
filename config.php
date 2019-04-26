<?php 
	// connect to DB
	$conn = mysqli_connect("localhost","root","","loranode");
	mysqli_set_charset($conn, 'UTF8');
	if(!$conn){
		die('Error connect connection database'.mysqli_connect_error());
	}
	//comming soon ...
	define('ROOT_PATH', realpath(dirname(__FILE__)));  // _FILE_ trả về đường dẫn
	define('BASE_URL', 'http://localhost:8080/lorawebphp/');
	define('BASE_IMAGE', 'http://localhost:8080/lorawebphp/asset/img/');
?>


