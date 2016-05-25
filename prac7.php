<?php
  $palabra = $_POST['palabra'];
  $uno = bin2hex($palabra);
  
  
  $dos = substr($uno, 0, 1);
  $tres = substr($dos, -1, 1);
  $codificar = $uno.''.$dos.''.$tres;
  $cuatro = base_convert ( $codificar , 16 , 2);
  $cinco = bindec($cuatro);
  $seis = chr($cinco);
  echo $seis;
  ?>