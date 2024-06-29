<?php
$assoc = array("firstname" => "prensu" , "last-name" => "dangol") ;
echo $assoc["firstname"]."\n"."\n"; 

$numbers =array(1, 4, 56, 78, 9,23,55) ;
echo count($numbers)."\n" ;
echo max($numbers)."\n" ;
echo min($numbers)."\n" ;
echo sort($numbers)."\n" ;
print_r($numbers);
echo rsort($numbers)."\n" ;//reverse sort
print_r($numbers)."\n"."\n";

$num_string = implode("*",$numbers);
print_r(explode("*",$num_string));

echo in_array(23, $numbers)."\n";
echo in_array(9,$numbers);

?>