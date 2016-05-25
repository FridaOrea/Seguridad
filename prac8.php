<?php
  $str = $_POST['cadena'];
  $cero = uno($str);
  echo 'El hash de '.$str.' es '.$cero.'.';
  function uno($string){
    $array = str_split($string);
    $length = count($array);
    $hash = 0;
    for($y=0; $y<$length; $y++)
      $hash += ord($array[$y]);
    return $hash;
  }
?>
