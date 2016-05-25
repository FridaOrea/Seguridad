<?php
	$cuenta=$_POST['cuenta'];
	$llave=$_POST['llave'];
	$elegir=$_POST['cifrar'];
	$largo = strlen($cuenta);
	$larguito = strlen($llave);
	$uno;
	$dos;
	if ($largo == $larguito)
	{
		if ($elegir == 'c')
		{
			$uno=substr($cuenta , 0 , 4 );
			$dos=substr($cuenta , 4 , 5 );
			echo $dos.''.$uno;
		}
	
		if ($elegir == 'd')
		{
			$uno=substr($cuenta , 0 , 4 );
			$dos=substr($cuenta , 4 , 5 );
			echo $dos.''.$uno;
		}
	}
	else{
		echo "No son del mismo tamaño la llave y la cadena";
	}
?>