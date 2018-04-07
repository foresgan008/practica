
<?php
require("constants.php");

/*$con = mysqli_connect(DB_SERVER,DB_USER, DB_PASS) or die(mysql_error());
	mysqli_select_db(DB_NAME) or die("No se logra conexion");*/

	function connectDB(){
		$server = "127.0.0.1";
		$user = "root";
		$pass = "j04481587";
		$bd = "proyecto";
		
		$con = mysqli_connect($server, $user, $pass,$bd) 
			or die("Ha sucedido un error inexperado en la conexion de la base de datos");
	}
	
?>