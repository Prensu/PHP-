<?php

$first = "the quick brown fox";
$second = " jumps over the lazy dog";

$third = $first;
$third .= $second;

echo strtolower($third) ."\n" ; 
echo strtoupper($third) ."\n"; 
echo ucfirst($third) ."\n" ;
echo ucwords($third)."\n" ;

?>