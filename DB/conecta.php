<?php 
	function conectar(){
		$CON=mysqli_connect("localhost","id6883472_juegos","juegos","id6883472_juegos"); //(Host,DB_user,PW,DB_name)  
		if (!$CON) {
			die("Coneccion fallo");
		}
		return $CON;
	}

 ?>