
<?php
include 'accesoADatos.php';
	session_start();
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select nombre, 	clave from usuario");
			$consulta->execute();			
			$datos= $consulta->fetchAll(PDO::FETCH_ASSOC);		
			//var_dump($datos);
			foreach ($datos as $usuario ) {
				//var_dump($usuario );
				echo "su nombre es ".$usuario["nombre"];
				echo "<br>";
				echo "su clave es ".$usuario["clave"];
				echo "<br>";
			}
?>