<?php
echo "<html>
		<head>
			<title>Inicio</title>
		</head>
		<body>";
class conexion{
		private $conexion;
		private $server="localhost";
		private $usuario="root";
		private $pass="";
		private $db="usuarios";
		private $user ;
		private $password ;
				
	public function __construct()
	{
		$this->conexion= new mysqli($this->server, $this->usuario, $this->pass, $this->db);
		if($this->conexion->connect_errno)
		{
			die("No se pudo conectar: (". $this->conexion-connection_errno.")");
		}
	}
	
	
	public function cerrar()
	{
		$this->conexion->close();
	}
				
	public function login($usuario, $pass)
	{
		$this->user = $usuario;
		$this->password = $pass;
		$query = "select id, nombre, apellido, usuario, password from usuarios where usuario = '".$this->user."' and password = '".$this->password."'";
		$consulta = $this->conexion->query($query);
					
		if($row = mysqli_fetch_array($consulta)){
			session_start();
			$_session['id'] = $row ['id'];
			$_session['nom'] = $row ['nombre'];
			$_session['ape'] = $row ['apellido'];
							
			echo "Has iniciado sesión ";
			echo "<p>Ve a prácticas <a href='practicas.html'> Ir!</a>
			</p>";
		}
		else{
			echo "Usuario o contraseña incorrectos";
		}
	}
}
			/*$link = mysqli_connect('localhost', 'root', '')
				or die('No se pudo conectar: ');
			mysqli_select_db($link, 'usuarios') 
				or die('No se pudo seleccionar la base de datos');*/
echo "</body>
	</html>";
?>
