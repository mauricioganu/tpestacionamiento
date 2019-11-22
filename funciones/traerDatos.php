
<?php
include 'accesoADatos.php';
	session_start();
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); //obtener el acceso
			$consulta =$objetoAccesoDato->RetornarConsulta("select nombre, 	clave from usuario"); //crar la consulta
			$consulta->execute();			//ejecutar consulta
			$datos= $consulta->fetchAll(PDO::FETCH_ASSOC);		//trar formato esperado
			//var_dump($datos);
			foreach ($datos as $usuario ) {
				//var_dump($usuario );
				echo "su nombre es ".$usuario["nombre"];
				echo "<br>";
				echo "su clave es ".$usuario["clave"];
				echo "<br>";
			}
?>