<?php 

$count=2.06;

echo gettype($count)."\n";
echo $count."\n";

 settype($count,"integer")."\n";
echo gettype($count)."\n";

$count2=(string)$count;
echo gettype($count)."\n";
echo gettype($count2)."\n";

$test1=3;
$test2=6;
settype($test1,"string");
(string)$test2;
echo gettype($test1)."\n";
echo gettype($test2)."\n";
?>