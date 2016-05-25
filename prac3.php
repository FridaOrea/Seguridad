<?php
	$cuenta=$_POST['cuenta'];
	$elegir=$_POST['cifrar'];
	$uno;
	$dos;
	if ($elegir == 'c')
	{
		$uno=substr($cuenta , 0 , 4 );
		$dos=substr($cuenta , 4 , 5 );
		echo $dos.''.$uno;
	}
	
	if ($elegir == 'd')
	{
		$uno=substr($cuenta , 0 , 5 );
		$dos=substr($cuenta , 5 , 4 );
		echo $dos.''.$uno;
	}

?>