<?php 
$numbers = array(1,2,78,9,45,77,40) ;

sort($numbers)."\n";
print_r($numbers)."\n";

$num_string = implode("*",$numbers) ;
echo $num_string."\n";

print_r(explode("*",$num_string));



?>