
<?php
require("constants.php");

/*$con = mysqli_connect(DB_SERVER,DB_USER, DB_PASS) or die(mysql_error());
	mysqli_select_db(DB_NAME) or die("No se logra conexion");*/

	function connectDB(){
		$host=getenv("MYSQL_HOST");
		$user =getenv("MYSQL_USER");
		$pass =getenv("MYSQL_PASSWORD");
		$dbname = getenv("MYSQL_DATABASE");
		
		
		$con = mysqli_connect($host,$user, $pass,$dbname) 
			or die("Ha sucedido un error inexperado en la conexion de la base de datos");
	}
	
?>