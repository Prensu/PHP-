<?php

$first = "the quick brown fox";
$second = " jumps over the lazy dog";

$third = $first;
$third .= $second;

echo strtolower($third) ."\n" ; //dot is used for string concatenation 
echo strtoupper($third) ."\n"; 
echo ucfirst($third) ."\n" ;
echo ucwords($third)."\n" ;

echo strlen($third) ."\n" ; //find the length of the string 
echo "A" . trim("B C D ") . "E" ."\n" ; //removes the unnecessary spaces in the strings 
echo strstr($third,"brown") ."\n"; //find browin in the string 
echo str_replace("quick", "super-fast",$third) ."\n" ;

echo str_repeat($third,2) ."\n" ; 
echo substr($third,5, 10) ."\n" ; 
echo strpos($third, "brown") ."\n" ;
echo strchr($third,"z") ."\n" ; 

?>